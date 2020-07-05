@extends('layout_front')
@section('index')
<div class="main-container">
    <div class="container login-page">
        <h1 class="text-center"><span class="login">Login</span>|<span class="signup">Signup</span></h1>
        <form class="login">
            <input class="form-control" type="text" name="username" autocomplete="off" placeholder="Username" required />
            <input class="form-control" type="password" name="password" autocomplete="new-password" placeholder="Password" required />
            <input class="btn btn-primary btn-block" type="submit" value="login" />
        </form>

        <form  class="signup">
            <input class="form-control" type="text" name="username" autocomplete="off" placeholder="Username" required />
            <input class="form-control" type="password" name="password" autocomplete="new-password" placeholder="Password" required />
            <input class="form-control" type="email" name="email" placeholder="E-mail" required />
            <input class="btn btn-primary btn-block" type="submit" value="signup" />
        </form>
    </div>
</div>
@endsection