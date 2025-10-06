<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
//        dd('kk');


//        session()->flash('success', 'dwm');

        $data1 = Order::where('active' , 0)->where('key' , 1)->get();
        $data2 = Order::where('active' , 0)->where('key' , 2)->get();
        return view('home' , compact('data1' , 'data2'));
//            return with()0
//        session(['ww' => 'mm']);
//        return redirect('/')->with('success','ok KIARASH!');
//        return redirect()->route('login');
//        return view('home')->with('success', 'dashaaaX');
//        return view('home')->with('success', 'عملیات با موفقیت انجام شد!');

//        dd('kk');
    }
}
