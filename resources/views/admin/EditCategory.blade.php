@extends('admin/layout')
@section('index')

<h1 class="text-center" > {{__('Edit')}} {{__('Category')}}</h1>

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
             <label class="col-sm-2 control-label " > {{__('Category')}} {{__('Name')}}   </label>
                <div class="col-sm-10 col-md-6">
                <input type="text" name="name" placeholder="Your Category Name" class="form-control" value="{{$cat->name}}" />
            </div>
        </div>
        <!---- end category faild ---->

        <!---- start discription faild ---->
        <div class="form-group form-group-lg ">
             <label class="col-sm-2 control-label " > {{__('Description')}}   </label>
                <div class="col-sm-10 col-md-6">
                <input type="text" name="description" placeholder="Your Description" class="form-control" value="{{$cat->description}}"/>
            </div>
        </div> 
        <!---- end category faild ---->  
        
        
        <!---- start Ordering faild ---->
        <div class="form-group form-group-lg ">
             <label class="col-sm-2 control-label " >  {{__('Ordering')}}  </label>
                <div class="col-sm-10 col-md-6">
                <input type="number" name="ordering" class="form-control" placeholder="Your Order" value="{{$cat->ordering}}"/>
            </div>
        </div> 
        <!---- end Ordering faild ---->       

        <!---- start visibilty faild ---->
        <div class="form-group form-group-lg ">
             <label class="col-sm-2 control-label " >  {{__('visibilty')}}  </label>
                <div class="col-sm-10 col-md-6">
                    @if ($cat->visibilty==0)
                    <div>
                        <input id="vis-yes" type="radio" name="visibilty" value="0" checked />
                        <label for="vis-yes"> {{__('Yes')}} </label>
                    </div>
                    <div>
                        <input id="vis-no" type="radio" name="visibilty" value="1"  />
                        <label for="vis-no"> {{__('No')}} No</label>
                    </div>
                    @else
                    <div>
                        <input id="vis-yes" type="radio" name="visibilty" value="0"  />
                        <label for="vis-yes"> {{__('Yes')}} Yes</label>
                    </div>
                    <div>
                        <input id="vis-no" type="radio" name="visibilty" value="1" checked />
                        <label for="vis-no"> {{__('No')}} </label>
                    </div>
                    @endif
            </div>
        </div>
        <!---- end visibilty faild ---->

        <!---- start commenting faild ---->
        <div class="form-group form-group-lg ">
             <label class="col-sm-2 control-label " > {{__('Allow')}} {{__('commenting')}} </label>
                <div class="col-sm-10 col-md-6">
                    @if ($cat->allow_comment==0)
                    <div>
                        <input id="com-yes" type="radio" name="commenting" value="0" checked />
                        <label for="com-yes"> {{__('Yes')}} </label>
                    </div>
                    <div>
                        <input id="com-no" type="radio" name="commenting" value="1"  />
                        <label for="com-no"> {{__('No')}} No</label>
                    </div>
                    @else
                    <div>
                        <input id="com-yes" type="radio" name="commenting" value="0"  />
                        <label for="com-yes"> {{__('Yes')}} </label>
                    </div>
                    <div>
                        <input id="com-no" type="radio" name="commenting" value="1" checked />
                        <label for="com-no"> {{__('No')}} </label>
                    </div>
                        
                    @endif
            </div>
        </div>
        <!---- end commenting faild ---->

        <!---- start Ads faild ---->
            <div class="form-group form-group-lg ">
             <label class="col-sm-2 control-label " >{{__('Edit')}}{{__('Edit')}} Allow Ads </label>
                <div class="col-sm-10 col-md-6">
                    @if ($cat->allow_ads==0)
                    <div>
                        <input id="Ads-yes" type="radio" name="Ads" value="0" checked />
                        <label for="Ads-yes">{{__('Yes')}}</label>
                    </div>
                    <div>
                        <input id="Ads-no" type="radio" name="Ads" value="1"  />
                        <label for="Ads-no">{{__('No')}}No</label>
                    </div>
                    @else
                    <div>
                        <input id="Ads-yes" type="radio" name="Ads" value="0"  />
                        <label for="Ads-yes">{{__('Yes')}}</label>
                    </div>
                    <div>
                        <input id="Ads-no" type="radio" name="Ads" value="1" checked />
                        <label for="Ads-no">{{__('No')}}</label>
                    </div>
                    @endif
                    
            </div>
        </div>
        <!---- end Ads faild ---->  

        <div class="form-group form-group-lg ">
            <div class=" col-sm-offset-2 col-sm-10">
                <button class="btn btn-primary btn-lg" type="submit">  
                <span class="glyphicon glyphicon-arrow-up"></span> {{__('UP Date')}}  </button> 
            </div>
        </div> 


    </form>

 </div>

@endsection