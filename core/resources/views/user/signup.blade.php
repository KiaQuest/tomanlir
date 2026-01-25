<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Page TL</title>
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

<h1>Sign up</h1>
<br>
<form action="{{ route('signup.action') }}" method="post">
{{--    <div class="s1">--}}
{{--        <p>Qrupumuza xoş gəlipiz</p>--}}
        @csrf
{{--        @include('eror')--}}
        <div>
            <label for="username">Username:</label>
            <input type="text" placeholder="sth" name="username" value="">
        </div><br>
        <div>
            <label for="username">Password:</label>
            <input type="text" placeholder="sth" name="password" value="">
        </div><br>
{{--        <div class="part"><label for="num1"> SoyAd</label> <br><input type="text" placeholder="sth" name="soyad" value="{{ old('soyad') }}"><br></div>--}}
{{--        <div class="part"><label for="num1"> Password</label><span> *</span> <br><input type="text" placeholder="sth" name="password"><br></div>--}}
{{--        <div class="part"><label for="num1"> NickName</label><span> *</span> <br><input type="text" placeholder="sth" name="nickname" value="{{ old('nickname') }}"><br></div>--}}
{{--        <div class="part"><label for="num1"> Telfon Numarasi</label> <br><input type="text" placeholder="09120001122" name="telfon" value="{{ old('telfon') }}"><br></div>--}}
{{--        <div class="part"><label for="num1"> Yaş</label><br> <input type="text" placeholder="sth" name="yas" value="{{ old('yas') }}"><br></div>--}}
{{--        <div><label for="pv"> Heç kimə göstərmə </label> <input type="checkbox" placeholder="sth" name="pv" id="pv"></div><br>--}}
        {{-- <label for="num1"> Ad </label> <input type="text" placeholder="sth"><br> --}}

        <input type="submit">
{{--    </div>--}}


</form>

@if($errors->any())
    {{ implode('', $errors->all(':message')) }}
@endif


</body>
</html>
