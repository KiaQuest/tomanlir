<h1>sign up page</h1>

<form action="{{ route('signup.action') }}" method="post">
{{--    <div class="s1">--}}
{{--        <p>Qrupumuza xoş gəlipiz</p>--}}
        @csrf
{{--        @include('eror')--}}
        <div>username<input type="text" placeholder="sth" name="username" value=""><br></div>
        <div>password<input type="text" placeholder="sth" name="password" value=""><br></div>
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
