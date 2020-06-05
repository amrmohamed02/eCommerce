@extends('admin/layout')
@section('index')
    

    <form class="login">
        <h4>Admin Login</h4>
        <input class="form-control" type="text" name="user" placeholder="User Name" autocomplete="off" />
        <input  class="form-control" type="password" name="pass" placeholder="PassWord" autocomplete="new-password" />
        <input  class="btn btn-primary btn-block" type="submit" value="login"/>
    </form>
    
@endsection
