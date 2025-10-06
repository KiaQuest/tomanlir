<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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

//        dd($request->all());
        Order::create($request->all());
        return Redirect::back()->with('order' , 'added');
//        dd($request->all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function buy(Request $request)
    {
        dd($request->all());
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
        Order::where('id' , $request->id )->update(['active' => 1]);
        return redirect()->back()->with('action' , 'done');
        dd($request->all());
    }
}
