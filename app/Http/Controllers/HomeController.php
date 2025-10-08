<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
//        dd('kk');


//        session()->flash('success', 'dwm');
        if (Auth::check()) {
            // The user is logged in...

            $data1 = Order::where('active' , 0)->where('key' , 1)->where('user_id' , '<>' , Auth::user()->id)->get();
            $data2 = Order::where('active' , 0)->where('key' , 2)->where('user_id' , '<>' , Auth::user()->id)->get();
        }else{


            $data1 = Order::where('active' , 0)->where('key' , 1)->get();
//            $data1 = Order::where('active' , 0)->where('key' , 1)->paginate(1);
            $data2 = Order::where('active' , 0)->where('key' , 2)->get();
        }

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
