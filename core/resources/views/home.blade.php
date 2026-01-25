<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TomanLir ExChange</title>
    <style>
        @import"https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700&display=swap";

        * {
            /*padding: 0;*/
            /*margin: 0;*/
            /*list-style: none;*/
            /*border: 0;*/
            /*box-sizing: border-box;*/
            /*outline: 0;*/
            text-decoration: none;
            font-family: 'Mulish', sans-serif;
            -webkit-font-smoothing: antialiased;
        }

        :root {
            --animation-speed: 300ms;
        }

        html, body {
            height: 100%;
            overflow-x: hidden;
        }
        .backdrop {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,.5);
            opacity: 0;
            visibility: hidden;
            transition: var(--animation-speed) all;
            cursor: pointer;
        }

        .menu {
            position: fixed;
            top: 0;
            left: 0;
            width: 300px;
            /*height: 100%;*/
            /*background: #03031461;*/
            /*background: #fff;*/
            /*border-right: 1px solid #ddd;*/
            transform: translateX(-100%);
            transition: var(--animation-speed) transform;
        }
        /*.menu ul li {*/
        /*    border-bottom: 1px solid #ddd;*/
        /*}*/
        .menu ul li a {
            /*display: block;*/
            display: inline-block;
            border-radius: 50px;
            font-size: 20px;
            letter-spacing: 2px;
            padding: 15px 20px;
            /*color: #f6ecec;*/
            color: #000000;
            font-style: italic;
            /*font-size: x-large;*/
            background-color: rgb(82 87 96 / 91%);
            /*background-color: rgba(74, 85, 104, 0.62);*/
            font-weight: bold;
        }
        /*.menu ul li a:hover {*/
        /*    background-color: lime;*/
        /*}*/

        .container {
            /*height: 100%;*/
            /*background: #eee;*/
            transition: var(--animation-speed) transform;
        }
        .container .header {
            height: 60px;
            /*border-bottom: 1px solid #ddd;*/
            /*display: flex;*/
            /*align-items: center;*/
            /*background: #02044dbf;*/
            /*background: #fff;*/
            /*padding: 0 20px;*/
            margin: 1.5rem;
        }
        .container .actions {
            margin-left: auto;
        }
        .container .logo {
            color: #222;
            margin-left: 20px;
            font-weight: bold;
            font-size: 30px;
            text-transform: uppercase;
        }


        /**
            Hamburger menu kodları
        **/
        .hamburger-menu {
            --height: 2.4px;
            --space: calc(var(--height) * 2.5);
            --animation-speed: 300ms;
            width: calc(var(--space) * 4);
            height: calc(var(--height) + (var(--space) * 2));
            display: block;
            cursor: pointer;
            position: relative;
            z-index: 5;
        }
        .hamburger-menu span,
        .hamburger-menu span::before,
        .hamburger-menu span::after {
            content: '';
            display: block;
            height: var(--height);
            width: 100%;
            background: #dec5c5;
        }
        .hamburger-menu span {
            transform: translateY(var(--space));
            transition: var(--animation-speed) var(--animation-speed) background-color;
        }
        .hamburger-menu span::before {
            position: absolute;
            bottom: var(--space);
            transition: var(--animation-speed) transform, var(--animation-speed) var(--animation-speed) bottom;
        }
        .hamburger-menu span::after {
            position: absolute;
            top: var(--space);
            transition: var(--animation-speed) transform, var(--animation-speed) var(--animation-speed) top;
        }

        #menu-toggle {
            display: none;
        }
        #menu-toggle:checked ~ nav.menu {
            transform: translateX(0);
        }
        #menu-toggle:checked ~ .container {
            transform: translateX(300px);
        }
        #menu-toggle:checked ~ .container .backdrop {
            opacity: 1;
            visibility: visible;
        }
        #menu-toggle:checked ~ .container .hamburger-menu span {
            background: transparent;
            transition: var(--animation-speed) background-color;
        }
        #menu-toggle:checked ~ .container .hamburger-menu span::before {
            transform: rotate(-45deg);
            bottom: 0;
            background-color: #fff;
            transition: var(--animation-speed) var(--animation-speed) transform, var(--animation-speed) bottom;
        }
        #menu-toggle:checked ~ .container .hamburger-menu span::after {
            transform: rotate(45deg);
            top: 0;
            background-color: #fff;
            transition: var(--animation-speed) var(--animation-speed) transform, var(--animation-speed) top;
        }
        th {
            border: none !important;
        }
        table {
            border: none !important;
            width: 100%;
        }
        h1 {
            margin: auto;
        }
        h6 {
            text-shadow: -7px 10px 12px #000000;
        }
        body {
            margin: 0;
        }
        svg {
            display: none;
        }
    </style>
</head>
<body>

@auth()
<input type="checkbox" id="menu-toggle">

<div class="container">
    <div class="header">
        <label class="hamburger-menu" for="menu-toggle">
            <span></span>
        </label>
{{--        <a href="#" class="logo">--}}
{{--            TL--}}
{{--        </a>--}}
{{--        <div class="actions">--}}
{{--            ♣--}}
{{--        </div>--}}
{{--        <label for="menu-toggle" class="backdrop"></label>--}}
    </div>
</div>

<nav class="menu">
    <ul>
        <li>
{{--            <a href="#">Anasayfa</a>--}}
            <a href="{{ route('profile') }}">Profile</a>
        </li>
        <li>
            <a href="{{ route('wallet') }}">Wallet</a>
        </li>
        <li>
            <a href="{{ route('order') }}">Order</a>
        </li>
        <li>
            <a href="{{ route('profile') }}">Token</a>
        </li>
        <li>
            <a href="{{ route('profile') }}">bardasht</a>
        </li>
        <li>
            <a href="{{ route('profile') }}">Support</a>
        </li>
        <li>
            <a href="{{ route('profile') }}">About Us</a>
        </li>
        <li>
            <a href="{{ route('profile') }}">Statistics</a>
        </li>
        <li>
            <a href="{{ route('logout') }}">Log out</a>
        </li>
    </ul>
</nav>

@endauth
{{--<label><a href="{{ route('profile') }}">Profile</a></label><br>--}}
{{--<label><a href="{{ route('wallet') }}">Wallet</a></label><br>--}}
{{--<label><a href="{{ route('order') }}">Order</a></label><br>--}}
{{--    <a href="{{ route('XXX') }}">XXX</a><br>--}}
{{--<label><a href="{{ route('profile') }}">Token</a></label><br>--}}
{{--<label><a href="{{ route('profile') }}">Bardasht</a></label><br>--}}
{{--<label><a href="{{ route('profile') }}">Support</a></label><br>--}}
{{--<label><a href="{{ route('profile') }}">About Us</a></label><br>--}}
{{--<label><a href="{{ route('profile') }}">Statistics</a></label><br>--}}
{{--<label><a href="{{ route('logout') }}">log out</a></label>--}}

{{--<h1>jadval</h1>--}}

<div class="c" style="text-align: center">

    <h1 style="margin: 3rem 0 0 ; font-style: italic"> {{ 'TomanLir' }} </h1>
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


{{--    here--}}

    <style>
        .bt {
            color: #ffffff;
            background-color: darkcyan;
            margin: 2em 1em 1em;
            padding: 1em;
            font-size: x-large;
            border-block-color: cornsilk;
            opacity: .85;
            border: aliceblue;
            width: 70%;
        }
        .bt1 {
            border-top-right-radius: 50px;
            border-bottom-left-radius: 50px;
        }
        .bt2 {
            border-top-left-radius: 50px;
            border-bottom-right-radius: 50px;
        }
        a {
            color: aliceblue;
        }
        body {
            background-color: #272e37;
            color: aliceblue !important;
        }
        table, th, td {
            border:1px solid aliceblue;
            /*border:1px solid black;*/
            /*width: 10em;*/
            text-align: center;
            padding: .2rem 0;
            border-bottom: none;
            border-right: none;
        }
        tr:nth-child(even) {
            background-color: rgb(5 29 22 / 68%);
        }
        .ff {
            /*text-align: center;*/
            display: flex;
            justify-content: center;
            align-items: flex-start;

        }
        label {
            font-size: x-large;
        }
    </style>

    <br><br>
<div class="all" style="display: flex ; justify-content: center">
    <div style="margin: 0 5rem"><h1>خرید</h1><h6>خریداران لیر</h6></div>
{{--    <div style="margin: 0 5rem"><h1>خرید</h1><h6>کسانی که میخواهند لیر بخرند</h6></div>--}}
    <div style="margin: 0 5rem"><h1>فروش</h1><h6>کسانی که لیر برای فروش گذاشته اند</h6></div>
</div>
{{--    <hr>--}}
    <div class="ff">
        <table>
            <tr>
                <th></th>
                <th>lir</th>
                <th>تومن</th>
{{--                <th>Amount (lira)</th>--}}
{{--                <th>Price (تومن)</th>--}}
{{--                <th>Verified</th>--}}
            </tr>
            @foreach($data1 as $order)

                <tr>
{{--                    <td> {{ $order->key == 1 ? "xarid" : "furush" }} </td>--}}
                    <td> @guest() ff @endguest
                         @auth() <a href="{{ route('order.buy' , ['id' => $order->id]) }}">xarid</a> @endauth
{{--                        {{ $order->user_id }}--}}
                    </td>
                    {{--                    <td>{{ \Illuminate\Support\Number::currency($order->amount , in: 'EUR', locale: 'de', precision : 1 ) }} ₺</td>--}}
                    <td>{{ \Illuminate\Support\Number::format($order->amount , precision : 0  ) }} ₺</td>

                    <td>{{ \Illuminate\Support\Number::format($order->price)  }}  </td>
                    {{--                    <td>{{ substr($order->time, 0, 2) . ':' . substr($order->time, 2, 2) }}</td>--}}

{{--                    <td><a href="{{ route('order.delete' , [ 'id' => $order->id ]) }}">Delete</a></td>--}}
{{--                    <td> reserve [{{ $order->user_id }}]</td>--}}
                </tr>

            @endforeach
        </table>
{{--        {{ $data1->links() }}--}}
{{--    </div>--}}

{{--    <div class="ff">--}}
        <table>
            <tr>
                <th>lir</th>
                <th>تومن</th>
{{--                <th>Verified</th>--}}
                <th></th>
            </tr>
            @foreach($data2 as $order)

                <tr>
{{--                    <td> {{ $order->key == 1 ? "xarid" : "furush" }} </td>--}}

                    {{--                    <td>{{ \Illuminate\Support\Number::currency($order->amount , in: 'EUR', locale: 'de', precision : 1 ) }} ₺</td>--}}
                    <td>{{ \Illuminate\Support\Number::format($order->amount , precision : 0  ) }} ₺</td>

                    <td>{{ \Illuminate\Support\Number::format($order->price)  }}  </td>
                    {{--                    <td>{{ substr($order->time, 0, 2) . ':' . substr($order->time, 2, 2) }}</td>--}}

{{--                    <td><a href="{{ route('order.delete' , [ 'id' => $order->id ]) }}">Delete</a></td>--}}
{{--                    <td> reserve [{{ $order->user_id }}]</td>--}}
                    <td> @guest() ff @endguest
                        @auth() <a href="{{ route('order.buy' , ['id' => $order->id]) }}">xarid</a> @endauth
{{--                        {{ $order->user_id }}--}}
                    </td>
                </tr>

            @endforeach

        </table>
    </div>
{{--    @auth()--}}
{{--        @if($data1->count() > 1)--}}
{{--            --}}
{{--            @if( $data1->lastPage() > $data2->lastPage() )--}}
{{--                {{ $data1->links() }}--}}
{{--            @elseif( $data1->lastPage() < $data2->lastPage() )--}}
{{--                {{ $data2->links() }}--}}
{{--            @endif--}}

{{--        @endif--}}
{{--    @endauth--}}
{{--    {{ $data2->links() }}--}}

    @if (session('tramount'))
        <div class="alert alert-success">
            {{ session('tramount') }}
        </div>
    @endif

</div>

@guest()
    <div style="text-align: center">
        <a href="{{ route('login') }}">
            <button type="submit" class="bt2 bt">Login</button></a>
        <br>
        <a href="{{ route('signup') }}">
{{--            <button type="submit" class="bt1 bt"> sign up </button>--}}
            sign up
        </a>

    </div>
@endguest
<br>


{{--    <label><a href="{{ route('profile') }}">Profile</a></label><br>--}}
{{--    <label><a href="{{ route('wallet') }}">Wallet</a></label><br>--}}
{{--    <label><a href="{{ route('order') }}">Order</a></label><br>--}}
{{--    <a href="{{ route('XXX') }}">XXX</a><br>--}}
{{--    <label><a href="{{ route('profile') }}">Token</a></label><br>--}}
{{--    <label><a href="{{ route('profile') }}">Bardasht</a></label><br>--}}
{{--    <label><a href="{{ route('profile') }}">Support</a></label><br>--}}
{{--    <label><a href="{{ route('profile') }}">About Us</a></label><br>--}}
{{--    <label><a href="{{ route('profile') }}">Statistics</a></label><br>--}}
{{--    <label><a href="{{ route('logout') }}">log out</a></label>--}}
{{--    {{ \Illuminate\Support\Facades\Auth::user()->username }} username--}}
{{--    {{ \Illuminate\Support\Facades\Auth::user()->id }} id--}}

<br>

</body>
</html>
