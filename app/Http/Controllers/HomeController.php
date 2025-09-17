<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
//        dd('kk');


//        session()->flash('success', 'dwm');
        return view('home');
//            return with()0
//        session(['ww' => 'mm']);
//        return redirect('/')->with('success','ok KIARASH!');
//        return redirect()->route('login');
//        return view('home')->with('success', 'dashaaaX');
//        return view('home')->with('success', 'عملیات با موفقیت انجام شد!');

//        dd('kk');
    }
}
