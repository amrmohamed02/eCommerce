@extends('admin/layout')
@section('index')
    

    <form class="login" method="POST">
        @csrf
        <h4>{{__('Admin')}} {{__('Login')}}</h4>
        <input class="form-control" type="email" name="email" placeholder="{{__('Email')}}" autocomplete="off" />
        <input  class="form-control" type="password" name="password" placeholder="{{__('Password')}}" autocomplete="new-password" />
        <input  class="btn btn-primary btn-block" type="submit" name="submit" value="{{__('Login')}}"/>

        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>

  <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Star

    </form>
    
@endsection
