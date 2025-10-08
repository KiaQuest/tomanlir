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


<div class="c" style="text-align: center">
    here

    <style>
        table, th, td {
            border:1px solid black;
            /*width: 10em;*/
            text-align: center;
            padding: .4rem;
        }
        .ff {
            /*text-align: center;*/
            display: flex;
            justify-content: center;
            align-items: flex-start;

        }
    </style>

    <br><br>
<div class="all" style="display: flex ; justify-content: center">
    <div style="margin: 0 5rem"><h1>خرید</h1><h6>کسانی که میخواهند لیر بخرند</h6></div>
    <div style="margin: 0 5rem"><h1>فروش</h1><h6>کسانی که لیر برای فروش گذاشته اند</h6></div>
</div>
    <div class="ff">
        <table>
            <tr>
                <th></th>
                <th>Amount (lira)</th>
                <th>Price (تومن)</th>
{{--                <th>Verified</th>--}}
            </tr>
            @foreach($data1 as $order)

                <tr>
{{--                    <td> {{ $order->key == 1 ? "xarid" : "furush" }} </td>--}}
                    <td> @guest() dokme xarid @endguest
                         @auth() <a href="{{ route('order.buy' , ['id' => $order->id]) }}">xarid</a> @endauth {{ $order->user_id }}
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
                <th>Amount (lira)</th>
                <th>Price (تومن)</th>
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
                    <td> @guest() dokme xarid @endguest
                        @auth() <a href="{{ route('order.buy' , ['id' => $order->id]) }}">xarid</a> @endauth  {{ $order->user_id }}</td>
                </tr>

            @endforeach
{{--            {{ $data2->links() }}--}}
        </table>
    </div>

    @if (session('tramount'))
        <div class="alert alert-success">
            {{ session('tramount') }}
        </div>
    @endif

</div>

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
    {{ \Illuminate\Support\Facades\Auth::user()->username }} username
    {{ \Illuminate\Support\Facades\Auth::user()->id }} id
@endauth
<br>

</body>
</html>
