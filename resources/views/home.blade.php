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
                         @auth() <a href="{{ route('order.buy' , ['id' => $order->id]) }}">xarid</a> @endauth
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
                        @auth() <a href="{{ route('order.buy' , ['id' => $order->id]) }}">xarid</a> @endauth </td>
                </tr>

            @endforeach
        </table>
    </div>


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
