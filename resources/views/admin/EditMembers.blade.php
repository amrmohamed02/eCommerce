@extends('admin/layout')
@section('index')

<h1 class="text-center" >{{__('Edit')}} {{__('Member')}}</h1>

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
             <label class="col-sm-2 control-label " > {{__('Username')}} </label>
                <div class="col-sm-10 col-md-6">
                <input type="text" name="username" class="form-control" value="{{$user->username}}"/>
            </div>
        </div>

        <div class="form-group form-group-lg ">
             <label class="col-sm-2 control-label " > {{__('Password')}} </label>
                <div class="col-sm-10 col-md-6">
                <input type="text" name="password" class="form-control" />
            </div>
        </div>        

        <div class="form-group form-group-lg ">
             <label class="col-sm-2 control-label " > {{__('Email')}}</label>
                <div class="col-sm-10 col-md-6">
                <input type="email" name="email" class="form-control" value="{{$user->email}}"/>
            </div>
        </div>        


        <div class="form-group form-group-lg ">
             <label class="col-sm-2 control-label " > {{__('Fullname')}} </label>
                <div class="col-sm-10 col-md-6">
                <input type="text" name="fullname" class="form-control" value="{{$user->name}}"/>
            </div>
        </div>

        <div class="form-group form-group-lg ">
                <div class=" col-sm-offset-2 col-sm-10">
                <input type="submit" value="{{__('Update')}}" class="btn btn-primary btn-lg" />
            </div>
        </div>        

    </form>

 </div>
    

@endsection