
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
    <h1>Wallet Page</h1>
    <br>
    <br>
    <br>

{{--    <h4>user : {{ $user->username }}</h4>--}}
{{--    <h4>mobile : {{ $user->mobile }}</h4>--}}
{{--    <h4>name : {{ $user->name }}</h4>--}}
{{--    <h4>lastname : {{ $user->lastname }}</h4>--}}
{{--    <h4>email : {{ $user->email }}</h4>--}}
{{--    <h4>iban : {{ $user->iban }}</h4>--}}
{{--    <h4>ibanname : {{ $user->ibanname }}</h4>--}}
{{--    <h4>kart : {{ $user->kart }}</h4>--}}
    <h4>ircharge : {{ $user->ircharge }}  
        <a href="{{ route('wallet.increase' , ['key' => 1]) }}">
        <button type="submit">+</button></a>
    </h4>
    <h4>trcharge : {{ $user->trcharge }}  
        <a href="{{ route('wallet.increase' , ['key' => 2]) }}">
            <button type="submit">†</button></a>
    </h4>
{{--    <h4>token : {{ $user->token }}</h4>--}}


    unverified orders :

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
            <th>Amount</th>
            <th>Time</th>
            <th>Verified</th>
        </tr>
        @foreach($orders as $order)

            <tr>
                @if($order->key == 1)
                    <td>{{ \Illuminate\Support\Number::currency($order->amount, 'IRR', 'ir')  }}</td>
                @else
                    <td>{{ \Illuminate\Support\Number::currency($order->amount, 'TRY', 'tr')  }}</td>
                @endif
                <td>{{ substr($order->time, 0, 2) . ':' . substr($order->time, 2, 2) }}</td>
                <td>{{ $order->verify }} verify nashode</td>
            </tr>

        @endforeach
    </table>
</div>
</div>

{{--<a href="{{ route('profile.edit') }}">Edit</a>--}}

@if (session('action'))
    <p style="color: chocolate">{{ session('action') }}</p>
@endif

@endsection
