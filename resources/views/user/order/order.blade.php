@extends('app')

@section('content')

    <br>    <br>
    <br>    <br>
<div class="c" style="text-align: center">

    <h1>ORDER page</h1>
    <br>    <br>


    make order
    <br><br>
    <form action="{{ route('order.action' , ['key' => 2] ) }}" method="post"> Satiş
        @csrf
        <input type="text" name="amount" placeholder="amount"> -
        <input type="text" name="price" placeholder="price">
        <input type="submit" name="submit" id="">
    </form>
    <br><br><br>
    <form action="{{ route('order.action' , ['key' => 1] ) }}" method="post"> Aliş
        @csrf
        <input type="text" name="amount" placeholder="amount"> -
        <input type="text" name="price" placeholder="price">
        <input type="submit" name="submit" id="">
    </form>

    <br>
    <br>

    @if (session('order'))
        <div class="alert alert-success">
            {{ session('order') }}
        </div>
    @endif
    @if (session('action'))
        <div class="alert alert-success">
            {{ session('action') }}
        </div>
    @endif
    @if (session('error1'))
        <div class="alert alert-success">
            {{ session('error1') }}
        </div>
    @endif
    <br>
your orders


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

        }
    </style>
    <br><br>
    <div class="ff">
        <table>
            <tr>
                <th></th>
                <th>Amount (lira)</th>
                <th>Price (تومن)</th>
                <th>Verified</th>
            </tr>
            @foreach($orders as $order)

                <tr>
                    <td> {{ $order->key == 1 ? "xarid" : "furush" }} </td>
{{--                    <td>{{ \Illuminate\Support\Number::currency($order->amount , in: 'EUR', locale: 'de', precision : 1 ) }} ₺</td>--}}
                    <td>{{ \Illuminate\Support\Number::format($order->amount , precision : 0  ) }} ₺</td>

                        <td>{{ \Illuminate\Support\Number::format($order->price)  }}  </td>
{{--                    <td>{{ substr($order->time, 0, 2) . ':' . substr($order->time, 2, 2) }}</td>--}}

                    <td><a href="{{ route('order.delete' , [ 'id' => $order->id ]) }}">Delete</a></td>
                </tr>

            @endforeach
        </table>
    </div>

</div>

@endsection
