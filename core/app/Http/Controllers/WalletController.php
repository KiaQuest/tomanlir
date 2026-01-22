<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class WalletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $userID = Auth::user()->id;
        $orders = Payment::where('user_id','=' , $userID)->where('verify' , 0)->get();

//        dd($orders);
        return view('user.wallet.wallet' , compact('orders' , 'user'));
    }
    public function indexIncrease()
    {
//        $user = Auth::user();
        return view('user.wallet.wallet-increase');
    }

    public function indexIncrease2(Request $request)
    {
//        $user = Auth::user();
        $vahed = $request->input('vahed');

//        session(['vahed' => $request->input('vahed')]);
//        $vahed = $request->session()->get('vahed');
//        die($vahed);
        return view('user.wallet.wallet-increase2', compact('vahed'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $id = Auth::user()->id;
//        dd($request->all());

//        $request->request->add('user_id' => 'id');
        $request->request->add(['user_id' => $id]);
        $request->request->remove('_token');
//        dd($request->all());
        Payment::create($request->all());

        return Redirect::route('home')->with(['increase' => 'pardaxt sabt shod montazere tayid bashid']);
//        dd($request->all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
