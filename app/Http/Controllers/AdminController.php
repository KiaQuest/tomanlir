<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {

        dd($request);
    }

    public function login2(Request $request)
    {
        if ($request->username == 'kia' && $request->password == '741'){
            Session::put('admin', 'authed');

            $data = Payment::where('verify' , 0)->get();
//            dd($data);
            return view('admin.unverifies' , compact('data'));
            dd(session()->all());
        }else{
            dd('no');
        }
//        dd($request->all());
//        die('ss');
    }

    public function verification(Request $request)
    {
        dd($request->all());
    }
}
