<h1>Edit page</h1>

<form action="{{ route('profile.edit.action') }}" method="post">

    @csrf
    name<input type="text" name="name" value="{{ $user->name }}"><br>
    lastname<input type="text" name="lastname" value="{{ $user->lastname }}"><br>
    mobile<input type="text" name="mobile" value="{{ $user->mobile }}"><br>
    email<input type="text" name="email" value="{{ $user->email }}"><br>
    iban<input type="text" name="iban" value="{{ $user->iban }}"><br>
    iban sahibi<input type="text" name="ibanname" value="{{ $user->ibanname }}"><br>
    kart iran<input type="text" name="kart" value="{{ $user->kart }}"><br>
    shaba<input type="text" name="shaba" value="{{ $user->shaba }}"><br>
    instagram<input type="text" name="insta" value="{{ $user->insta }}"><br>
    address<input type="text" name="address" value="{{ $user->address }}"><br>
    <input type="submit" name="submit" ><br>
</form>
