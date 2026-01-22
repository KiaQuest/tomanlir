<h1>LOGIN PAGE</h1>

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
