admin login page

<h1>LOGIN PAGE</h1>

{{--@guest--}}

<form action="{{ route('admin.login.action2') }}" method="post">
    @csrf
    <div>
{{--        <label for="username">Username:</label>--}}
        <input type="username" name="username" id="username" required>
    </div>

    <div>
{{--        <label for="password">Password:</label>--}}
        <input type="password" name="password" id="password" required>
    </div>

    <button type="submit">♠</button>

</form>



<h5>version : 1.1.0</h5>


<?php
