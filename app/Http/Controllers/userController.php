<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

//        $rr = Auth::user();
//        dd($rr);
        return view('user.signup');
        //
    }

    public function loginpage()
    {
//        dd('s');
//        return view('user.login',compact('logged' , 'yea'));
//        Auth::logout();
//        session(['pox2' =>'ok']);
        return view('user.login')->with('pox' , 'yea');
    }

    public function loginact(Request $request)
    {
//        dd(Hash::make($request['password']));
//        dd($request->all());


        $this->validate(request(), [
            'username' => 'required|max:20',
            'password' => 'required|max:40',
        ], [
            'name.required' => 'Ad boş ola biləmməz',
            'password.required' => 'Password boş ola biləmməz',
        ]);

//        if (User::where('name', '=', $request->username)->where('password', '=', Hash::check($request['password']))->first()) {
        if ($t = User::where('username', '=', $request->username)->first()) {
//        if ($t = User::where('username', '=', $request->username)->take(1)->get()) {
//            die($t->password);

                if (Hash::check( $request['password'] , $t->password)) {
                    Auth::login($t);
//                    Hash::check('plain-text', $hashedPassword)

                    return Redirect::route('home')->with(['login' => 'login successful']);
//                    return route('home')->with(['login' , 'login successful']);
//                die('olde');
            }
//            die('olmade');
//            $userID = User::where('name', $request->name)->value('id');
//
//            session([
////                'userID' => $userID,
////                    'name' => $request->username,
//                    'must_login' => 'yes']);

//            Log::insert([
//                'user_id' => session('userID'),
//                'name' => $request->name,
//                'action' => 10,
//                'ip1' => request()->ip(),
//            ]);
//            return redirect('/anaSayfa');
        }
//        die('olmade');
            return redirect()->back()->with('field', 'ad və ya password iştibahde');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        $this->validate(request(), [
            'username' => 'required|regex:/^[a-zA-Z0-9@#%&*]+$/u|max:20|min:1|unique:users',
            'password' => 'required|max:40',
//            'nickname' => 'required|max:40|unique:users',
//            'telfon' => 'max:40',
//            'yas' => 'max:3',

        ], [
            'username.required' => 'Ad boş ola biləmməz',
            'username.regex' => 'Ad inglisi olsun',
            'username.max' => 'Ad 20 karekterdən çox ola biləmməz',
            'username.min' => 'Ad 3 karekterdən az ola biləmməz',
            'username.unique' => 'Ad artıq seçilib',
//            'nickname.unique' => 'nickname artıq seçilib',
//            'nickname.required' => 'nickname boş ola biləmməz',
            'password.required' => 'Password boş ola biləmməz',

        ]);

//        User::insert($request->all());

//        User::save($request->all());
//        die('f');
//        dd($request['username']);
        $user = new User;
//        $user->create($request->all());

        $user->username = $request['username'];
////        $user->email = Input::get('email');
        $user->password = Hash::make($request['password']);
        $user->save();

        return Redirect::route('home')->with('signup' , 'sign up successful') ;
//        return Redirect::back();

//        dd($request->all());
    }

    public function logout()
    {
        Auth::logout();
//        return route('home')->with('logout' , 'logout successful');
        return Redirect::route('home')->with('logout' , 'logged out successfully');
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
    public function show()
    {
        $user = Auth::user();
//        dd($user);
        return view('user.profile' , compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $user = Auth::user();
        return view('user.edit' , compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request , User $user)
    {
        $request->request->remove('_token');
        $request->request->remove('submit');
//        $request->except(['_token', 'submit']);

////        $user = $request->all();
////        $user->save();
//        dd($request->all());
////          $record = User::find(Auth::user()->id);
////        dd($record);
//        User::find(4)->update(['iban'=> $request->iban]);

//        $id = Auth::user()->id;
//        $user = User::find($id);

//        $user->update($request->all());

        User::where('id', Auth::user()->id)->update($request->all());

//        $record = Auth::user();
//        $record->update($request->all());
//        User::update($request->all());
//        dd($record);
//        Auth::user()->update($request->all());
//        User::where('id', $record)
//            ->update([
//                'iban'=> $request->iban
//            ]);
        return Redirect::route('profile')->with('action' , 'done');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
