<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\User;
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
            $data2 = User::where('verify' , 0)->get();
            return view('admin.unverifies' , compact('data' , 'data2'));
//            dd(session()->all());
        }else{
            dd('no');
        }
//        dd($request->all());
//        die('ss');
    }

    public function verification(Request $request)
    {
//        dd(\session()->all());
        $row = Payment::find($request->id);

        if ($row->key == 1){
            User::where('id', $row->user_id)->increment('ircharge', $row->amount);

        }else{
            User::where('id', $row->user_id)->increment('trcharge', $row->amount);

        }
        Payment::where('id' , $request->id)->update(['verify' => 1]);
        return redirect()->back()->with('action' , 'action Done');
//        dd($request->id);
    }

    public function user_verification(Request $request)
    {
        User::where('id', $request->id)->update(['verify' => 1]);
        return redirect()->back()->with('action' , 'action Done');
    }


}
