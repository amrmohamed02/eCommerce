@extends('layout_front')
@section('index')
<div class="main-container">
    <div class="container login-page">
        <h1 class="text-center"><span class="login">{{__('Login')}}</span>|<span class="signup">Signup</span></h1>
        <form class="login" method="POST" action="/{{$language}}/login">
            @csrf
            <input class="form-control" type="text" name="email" autocomplete="off" placeholder="Email" required />
            <input class="form-control" type="password" name="password" autocomplete="new-password" placeholder="Password" required />
            <input class="btn btn-primary btn-block" type="submit" value="login" />
        </form>

    <form  class="signup" method="POST" action="/{{$language}}/register">
        @csrf
            <input class="form-control" type="text" name="fullname" autocomplete="off" placeholder="FullName" required />
            <input class="form-control" type="text" name="username" autocomplete="off" placeholder="UserName" required />
            <input class="form-control" type="password" name="password" autocomplete="new-password" placeholder="Password" required />
            <input class="form-control" type="email" name="email" placeholder="E-mail" required />
            <input class="btn btn-primary btn-block" type="submit" value="signup" />
        </form>
    </div>
</div>
@endsection