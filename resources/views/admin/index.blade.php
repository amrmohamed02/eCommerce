@extends('admin/layout')
@section('index')
    

    <form class="login" method="POST">
        @csrf
        <h4>Admin Login</h4>
        <input class="form-control" type="text" name="email" placeholder="Email" autocomplete="off" />
        <input  class="form-control" type="password" name="password" placeholder="PassWord" autocomplete="new-password" />
        <input  class="btn btn-primary btn-block" type="submit" name="submit" value="login"/>
    </form>
    
@endsection
