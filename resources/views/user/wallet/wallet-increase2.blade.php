wallet2


<!-- home.blade.php -->
@extends('app')

@section('content')



    <div style="text-align: center">
        <br>
        <br>
        <h1>Wallet-Increase 2 Page</h1>
        <br>
        <br>
        <br>

        mablaqe darxastye baraye afzayesh -> {{ $vahed }}
        <br>
        be shomare karte zir mablaq ro enteqal dade va name ferestande va saat enteqal ro vared konid
        <br>
        <br>
        <br>

        @if(\Illuminate\Support\Facades\Request::get('key') == 1 )
            its 1


            iran kart : 0090 2212 2212 2121
            Kia
            <br><br>

            <label for="vahed">mablaq</label> : {{ $vahed }}
            <form action="{{ route('wallet.increase.action') }}" method="post">

                <input type="hidden" name="amount" value="{{$vahed}}">
                <input type="hidden" name="key" value="1">
                <label for="sender">sender name</label>
                <input type="text" name="sender_name" id="sender">
                <br><br>
                <label for="vahed">Time</label>
                <input type="text" name="time" id="mablaq">
                <br><br>
                <input type="submit" value="Submit">
                @csrf
            </form>

        @elseif(\Illuminate\Support\Facades\Request::get('key') == 2 )
            its2


            iran kart : 6037 5535 8121 2230
            Kia Bank Saman
            <br><br>
            <form action="{{ route('wallet.increase.action') }}" method="post">

                <input type="hidden" name="amount" value="{{$vahed}}">
                <input type="hidden" name="key" value="2">
                <label for="sender">sender name</label>
                <input type="text" name="sender_name" id="sender">
                <br><br>
                <label for="vahed">Time</label>
                <input type="text" name="time" id="mablaq">
                <br><br>
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
