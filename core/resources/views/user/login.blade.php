<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <style>

        body {
            margin: 10rem 0;
            background-color: #272e37;
            color: aliceblue !important;
            text-align: center;
        }
        input {
            margin: 1.5rem 0;
            padding: 1rem;
            border-radius: 50px;
        }
        label {
            font-size: x-large;
        }
        button {
            margin: 3rem 0 0;
            padding: 1rem;
            border-radius: 50px;
        }
    </style>
</head>
<body>

<h1 style="margin: 5rem 0">LOGIN PAGE</h1>

{{--@guest--}}

<form action="{{ route('login.action') }}" method="POST">
    @csrf
    <div>
        <label for="username">Username:</label>
        <input type="username" name="username" id="username" required>
    </div>

    <div>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
    </div>

    <button type="submit">Login</button>

{{--    @if (session('status'))--}}
{{--        <p style="color: darkseagreen">{{ session('status') }}</p>--}}
{{--    @endif--}}
    @if (session('field'))
        <p style="color: chocolate">{{ session('field') }}</p>
    @endif
    @if(session()->has('pox2'))
        {{ session('pox2') }}
    @endif

{{--    {{  $m = Session::get('logged') }}--}}
{{--    {{ $logged }}--}}

{{--    @if ($logged != null)--}}
{{--        ['{{ $logged }}']--}}
{{--        <p style="color: chocolate">{{ session('logged') }}</p>--}}
{{--    @endif--}}




</form>

{{--@endguest--}}



<h5>version : 1.1.0</h5>

@auth
    authed :)
@endauth


</body>

</html>
