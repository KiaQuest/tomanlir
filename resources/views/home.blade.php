<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



<h1> {{ 'this is homePAGE' }} </h1>
<h1>jadval</h1>


@guest()
<a href="{{ route('signup') }}">sign up</a>
<a href="{{ route('login') }}">Login</a>
@endguest
<br>
@auth()

    <a href="{{ route('profile') }}">Profile</a><br>
    <a href="{{ route('wallet') }}">Wallet</a><br>
    <a href="{{ route('order') }}">Order</a><br>
{{--    <a href="{{ route('XXX') }}">XXX</a><br>--}}
    <a href="{{ route('profile') }}">Token</a><br>
    <a href="{{ route('profile') }}">Bardasht</a><br>
    <a href="{{ route('profile') }}">Support</a><br>
    <a href="{{ route('profile') }}">About Us</a><br>
    <a href="{{ route('profile') }}">Statistics</a><br>
    <a href="{{ route('logout') }}">log out</a>
    {{ \Illuminate\Support\Facades\Auth::user()->username }}
@endauth
<br>
@if (session('login'))
    <p style="color: chocolate">{{ session('login') }}</p>
@endif
@if (session('signup'))
    <p style="color: chocolate">{{ session('signup') }}</p>
@endif
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if (session('increase'))
    <div class="alert alert-success">
        {{ session('increase') }}
    </div>
@endif


</body>
</html>
