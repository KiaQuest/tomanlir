
<!-- home.blade.php -->
@extends('app')

@section('content')



{{--<h4>{{ \Illuminate\Support\Facades\Auth::user() }}</h4>--}}

{{--@foreach($user as $param)--}}
{{--    <h4>name : {{ $param->id }}</h4>--}}
{{--@endforeach--}}
<div style="text-align: center">
    <br>
    <br>
    <h1>Wallet-Increase Page</h1>
    <br>
    <br>
    <br>

    @if(\Illuminate\Support\Facades\Request::get('key') == 1 )
        its 1


        iban : 0090 2212 2212 2121
        Kia
        <br><br>
        <form action="{{ route('wallet.increase2' , ['key' => 1] ) }}" method="post">
            <label for="vahed">vahed</label>
            <input type="text" name="vahed" id="vahedid">
            <input type="submit" value="Submit">
            @csrf
        </form>

    @elseif(\Illuminate\Support\Facades\Request::get('key') == 2 )
        its2


        iran kart : 6037 5535 8121 2230
        Kia Bank Saman
        <br><br>
        <form action="{{ route('wallet.increase2' , ['key' => 2] ) }}" method="post">
            <label for="vahed">vahed</label>
            <input type="text" name="vahed" id="vahedid2">
            <input type="submit" value="Submit">
            @csrf
        </form>

    @endif
{{--    <h4>user : {{ $user->username }}</h4>--}}
{{--    <h4>mobile : {{ $user->mobile }}</h4>--}}
{{--    <h4>name : {{ $user->name }}</h4>--}}
{{--    <h4>lastname : {{ $user->lastname }}</h4>--}}
{{--    <h4>email : {{ $user->email }}</h4>--}}
{{--    <h4>iban : {{ $user->iban }}</h4>--}}
{{--    <h4>ibanname : {{ $user->ibanname }}</h4>--}}
{{--    <h4>kart : {{ $user->kart }}</h4>--}}
{{--    <h4>ircharge : {{ $user->ircharge }}</h4> <a href="{{ route('wallet.increase') }}">--}}
{{--        <button type="submit">†</button></a>--}}
{{--    <h4>trcharge : {{ $user->trcharge }}</h4>--}}
{{--    <h4>token : {{ $user->token }}</h4>--}}

</div>

{{--<a href="{{ route('profile.edit') }}">Edit</a>--}}

@if (session('action'))
    <p style="color: chocolate">{{ session('action') }}</p>
@endif

@endsection
