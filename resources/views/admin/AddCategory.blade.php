@extends('admin/layout')
@section('index')

<h1 class="text-center" > {{__('Add')}} {{__('New')}} {{__('Category')}}  </h1>

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
        <!---- start category faild ---->
        <div class="form-group  form-group-lg ">
            <label class="col-sm-2 control-label " > {{__('Category')}} {{__('Name')}} </label>
                <div class="col-sm-10 col-md-6">
                <input type="text" name="name" placeholder="Your Category Name" class="form-control" value="{{Request::Old('name')}}" />
            </div>
        </div>
        <!---- end category faild ---->

        <!---- start discription faild ---->
        <div class="form-group form-group-lg ">
            <label class="col-sm-2 control-label " >{{__('Description')}}</label>
                <div class="col-sm-10 col-md-6">
                <input type="text" name="description" placeholder="Your Description" class="form-control" value="{{Request::Old('description')}}"/>
            </div>
        </div> 
        <!---- end category faild ---->  
        
        
        <!---- start Ordering faild ---->
        <div class="form-group form-group-lg ">
             <label class="col-sm-2 control-label " >{{__('Ordering')}}</label>
                <div class="col-sm-10 col-md-6">
                <input type="number" name="ordering" class="form-control" placeholder="Your Order" value="{{Request::Old('ordering')}}"/>
            </div>
        </div> 
        <!---- end Ordering faild ---->       

        <!---- start visibilty faild ---->
        <div class="form-group form-group-lg ">
             <label class="col-sm-2 control-label " >{{__('visibilty')}}</label>
                <div class="col-sm-10 col-md-6">
                <div>
                    <input id="vis-yes" type="radio" name="visibilty" value="0" checked />
                    <label for="vis-yes">Yes</label>
                </div>
                <div>
                    <input id="vis-no" type="radio" name="visibilty" value="1"  />
                    <label for="vis-no">No</label>
                </div>
            </div>
        </div>
        <!---- end visibilty faild ---->

        <!---- start commenting faild ---->
        <div class="form-group form-group-lg ">
             <label class="col-sm-2 control-label " >{{__('Allow')}} {{__('commenting')}} </label>
                <div class="col-sm-10 col-md-6">
                <div>
                    <input id="com-yes" type="radio" name="commenting" value="0" checked />
                    <label for="com-yes">Yes</label>
                </div>
                <div>
                    <input id="com-no" type="radio" name="commenting" value="1"  />
                    <label for="com-no">No</label>
                </div>
            </div>
        </div>
        <!---- end commenting faild ---->

        <!---- start Ads faild ---->
            <div class="form-group form-group-lg ">
             <label class="col-sm-2 control-label " > {{__('Allow')}}{{__('Ads')}}</label>
                <div class="col-sm-10 col-md-6">
                <div>
                    <input id="Ads-yes" type="radio" name="Ads" value="0" checked />
                    <label for="Ads-yes">Yes</label>
                </div>
                <div>
                    <input id="Ads-no" type="radio" name="Ads" value="1"  />
                    <label for="Ads-no">No</label>
                </div>
            </div>
        </div>
        <!---- end Ads faild ---->  

        <div class="form-group form-group-lg ">
            <div class=" col-sm-offset-2 col-sm-10">
                <button class="btn btn-primary btn-lg" type="submit">  
                <span class="glyphicon glyphicon-plus-sign"></span>{{__('Add')}}{{__('Category')}} </button> 
            </div>
        </div> 


    </form>

 </div>
@endsection