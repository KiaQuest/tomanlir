<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Number;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::where('active' , 0)->where('user_id' , Auth::user()->id)->get();
        return view('user.order.order' , compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        $request->request->remove('_token');
        $request->request->remove('submit');
        $request->request->add(['user_id' => Auth::user()->id]);

        $orderPrice = $request->amount * $request->price;
//        dd($request->all());
        if ($request->key == 1 && Auth::user()->ircharge > $orderPrice){
            User::find(Auth::user()->id)->decrement('ircharge' , $orderPrice);

        }elseif ($request->key == 2 && Auth::user()->trcharge > $request->amount){
            Auth::user()->decrement('trcharge' , $request->amount);
//            dd($request->all());

        }else{
            return \redirect()->back()->with('error1' , 'mojudi kafi nist');
        }
        Order::create($request->all());
        return Redirect::back()->with('order' , 'added');
//        dd($request->all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function buy(Request $request)
    {
        $order = Order::find($request->id);
        $amount = $order->amount * $order->price;
//        dd($order);
//        dd(Auth::user()->ircharge);

        if ($order->key == 1 && Auth::user()->trcharge - $order->amount > 0){
//            if (Auth::user()->ircharge - $amount > 0){
//            dd($request->all());
//            if (Auth::user()->trcharge - $order->amount > 0){

//            dd('dd');
                Auth::user()->decrement('trcharge' , $order->amount);
                Auth::user()->increment('ircharge' , $amount);
                $order->update(['active' => 2]);
                User::where('id' , $order->user_id)->increment('trcharge' , $order->amount);
                return \redirect()->back()->with('action' , 'done');
//                dd('1 bozogtar');

            }elseif ($order->key == 2 && Auth::user()->ircharge - $amount > 0){
//                dd($request->all());
                Auth::user()->increment('trcharge' , $order->amount);
                Auth::user()->decrement('ircharge' , $amount);
                $order->update(['active' => 2]);
//            dd($order->amount);
                User::find($order->user_id)->increment('ircharge' , $amount);
            }else{

            return \redirect()->back()->with('tramount' , 'mojudi lir kafi nist '. Number::format($order->amount) . ' Lir hade aqal niaz ast');
//            dd($order->amount * $order->price);
        }
//            dd('1 kuchiktar');
//
//        }elseif ($order->key == 2){
//            if (Auth::user()->trcharge - $order->amount > 0){
//                dd('2 bozogtar');
//            }
//            dd('2 kuchiktar');
//        }

        return \redirect()->back()->with('success' , 'done');
    }
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
//        Auth::user()->increment('ircharge' , 25);
//        dd('done');
        $order = Order::find($request->id);
        $amount = $order->amount * $order->price;
//        dd($amount);
        $order->update(['active' => 1]);
        if ($order->key == 1) {
            Auth::user()->increment('ircharge' , $amount);

        }elseif ($order->key == 2){
            Auth::user()->increment('trcharge' , $order->amount);

        }
        return redirect()->back()->with('action' , 'done');
        dd($request->all());
    }
}
