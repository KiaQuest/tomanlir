
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
    <h1>Profile Page</h1>
    <br>
    <br>
    <br>
    <h4>user : {{ $user->username }}</h4>
    <h4>mobile : {{ $user->mobile }}</h4>
    <h4>name : {{ $user->name }}</h4>
    <h4>lastname : {{ $user->lastname }}</h4>
    <h4>email : {{ $user->email }}</h4>
    <h4>iban : {{ $user->iban }}</h4>
    <h4>ibanname : {{ $user->ibanname }}</h4>
    <h4>kart : {{ $user->kart }}</h4>
    <h4>ircharge : {{ \Illuminate\Support\Number::format($user->ircharge) }}</h4>
    <h4>trcharge : {{ \Illuminate\Support\Number::format($user->trcharge) }}</h4>
    <h4>token : {{ $user->token }}</h4>

</div>

<a href="{{ route('profile.edit') }}">Edit</a>

@if (session('action'))
    <p style="color: chocolate">{{ session('action') }}</p>
@endif

@endsection
