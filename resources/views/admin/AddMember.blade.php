@extends('admin/layout')
@section('index')

<h1 class="text-center" >Add New Member</h1>

<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="form-horizontal" method="POST">
        @csrf

        <div class="form-group  form-group-lg ">
             <label class="col-sm-2 control-label " > Username </label>
                <div class="col-sm-10 col-md-6">
                <input type="text" name="username" class="form-control" value="{{Request::Old('username')}}" />
            </div>
        </div>

        <div class="form-group form-group-lg ">
             <label class="col-sm-2 control-label " > Password </label>
                <div class="col-sm-10 col-md-6">
                <input type="password" name="password" class="form-control" value="{{Request::Old('password')}}"/>
            </div>
        </div>        

        <div class="form-group form-group-lg ">
             <label class="col-sm-2 control-label " > E-mail </label>
                <div class="col-sm-10 col-md-6">
                <input type="email" name="email" class="form-control" value="{{Request::Old('email')}}"/>
            </div>
        </div>        


        <div class="form-group form-group-lg ">
             <label class="col-sm-2 control-label " > Fullname </label>
                <div class="col-sm-10 col-md-6">
                <input type="text" name="fullname" class="form-control" value="{{Request::Old('fullname')}}"/>
            </div>
        </div>

        <div class="form-group form-group-lg ">
            <div class=" col-sm-offset-2 col-sm-10">
                <input type="submit" value="Add" class="btn btn-primary btn-lg" />
            </div>
        </div>     

        <div class="form-group form-group-lg ">
            <div class=" col-sm-offset-2 col-sm-10">
            
        </div>
    </div> 

    </form>

 </div>
@endsection