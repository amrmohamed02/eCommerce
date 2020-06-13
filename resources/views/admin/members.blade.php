@extends('admin/layout')
@section('index')

<h1 class="text-center" >Edit Member</h1>

<div class="container">

    <form class="form-horizontal" >

        <div class="form-group  form-group-lg ">
             <label class="col-sm-2 control-label " > {{__('Username')}} </label>
                <div class="col-sm-10 col-md-6">
                <input type="text" name="username" class="form-control" />
            </div>
        </div>

        <div class="form-group form-group-lg ">
             <label class="col-sm-2 control-label " > {{__('Password')}} </label>
                <div class="col-sm-10 col-md-6">
                <input type="password" name="password" class="form-control" />
            </div>
        </div>        

        <div class="form-group form-group-lg ">
             <label class="col-sm-2 control-label " > {{__('Email')}}</label>
                <div class="col-sm-10 col-md-6">
                <input type="email" name="email" class="form-control" />
            </div>
        </div>        


        <div class="form-group form-group-lg ">
             <label class="col-sm-2 control-label " > Fullname </label>
                <div class="col-sm-10 col-md-6">
                <input type="text" name="fullname" class="form-control" />
            </div>
        </div>

        <div class="form-group form-group-lg ">
                <div class=" col-sm-offset-2 col-sm-10">
                <input type="submit" value="Update" class="btn btn-primary btn-lg" />
            </div>
        </div>        

    </form>

 </div>
    

@endsection