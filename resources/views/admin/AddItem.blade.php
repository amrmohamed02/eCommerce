@extends('admin/layout')
@section('index')
<h1 class="text-center"> {{__('Add')}} {{__('New')}} {{__('Item')}} </h1>

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
             <label class="col-sm-2 control-label " >    {{__('Item')}} {{__('Name')}} </label>
                <div class="col-sm-10 col-md-6">
                    <input type="text"
                            name="name" 
                            placeholder="Your Item Name"
                            class="form-control" 
                            value="{{Request::Old('name')}}" />
                </div>
        </div>
        <!---- end category faild ---->

        <!---- start Description faild ---->
        <div class="form-group  form-group-lg ">
             <label class="col-sm-2 control-label " >   {{__('Description')}}</label>
                <div class="col-sm-10 col-md-6">
                    <input type="text" 
                            name="description" 
                            placeholder="Item Description" 
                            class="form-control" 
                            value="{{Request::Old('description')}}" />
                </div>
        </div>
        <!---- end Description faild ---->

        <!---- start Price faild ---->
        <div class="form-group  form-group-lg ">
            <label class="col-sm-2 control-label " >  {{__('Price')}} </label>
                <div class="col-sm-10 col-md-6">
                    <input type="number" 
                            name="price" 
                            placeholder="Item Price" 
                            class="form-control" 
                            value="{{Request::Old('price')}}" />
                </div>
        </div>
        <!---- end Price faild ---->

        <!---- start Country made faild ---->
        <div class="form-group  form-group-lg ">
            <label class="col-sm-2 control-label " >  {{__('Country')}} </label>
                <div class="col-sm-10 col-md-6">
                    <input type="text" 
                            name="country" 
                            placeholder="Country Made Name" 
                            class="form-control" 
                            value="{{Request::Old('country')}}" />
                </div>
        </div>
        <!---- end Country made faild ---->

        <!---- start Status faild ---->
        <div class="form-group  form-group-lg ">
            <label class="col-sm-2 control-label " >   {{__('Status')}}</label>
                <div class="col-sm-10 col-md-6">
                    <select name="status" class="form-control">
                        <option value="0">{{Request::Old('status')}}</option>
                        <option value="New">New</option>
                        <option value="Like New">Like New</option>
                        <option value="Used">Used</option>
                    </select>
                </div>
        </div>
        <!---- end Status faild ---->

        <!---- start member-selct faild ---->
        <div class="form-group  form-group-lg ">
            <label class="col-sm-2 control-label " > {{__('Member')}} {{__('Name')}}  </label>
                <div class="col-sm-10 col-md-6">
                    <select name="member-name" class="form-control">
                        <option value="0">...</option>
                        <option value="0">mohamed</option>
                        <option value="1">ahmed</option>
                        <option value="2">ali</option>
                    </select>
                </div>
        </div>
        <!---- end member-selct faild ---->

        <!---- start category-selct faild ---->
        <div class="form-group  form-group-lg ">
            <label class="col-sm-2 control-label " > {{__('Category')}} {{__('Name')}} </label>
                <div class="col-sm-10 col-md-6">
                    <select name="category-name" class="form-control">
                        <option value="0">...</option>
                        <option value="0">mohamed</option>
                        <option value="1">ahmed</option>
                        <option value="2">ali</option>
                    </select>
                </div>
        </div>
        <!---- end category-selct faild ---->

        <div class="form-group form-group-lg ">
            <div class=" col-sm-offset-2 col-sm-10">
                <button class="btn btn-primary btn-lg" type="submit">  
                <span class="glyphicon glyphicon-plus-sign"></span> {{__('Add')}} {{__('New')}} {{__('Item')}}</button> 
            </div>
        </div> 


    </form>

 </div>

@endsection