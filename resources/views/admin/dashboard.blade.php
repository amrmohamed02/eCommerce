@extends('admin/layout')
@section('index')

<div class="home-stats">
    <div class="container  text-center " >
        <h1 class="text-center"> {{__('Dashboard')}}</h1>
        <div class="row">
            <div class="col-md-3">
                <div class="stat st-members"> 
                    <span class="glyphicon glyphicon-user icon pull-left"></span>
                    <div class="info">
                        {{__('Total')}} {{__('Members')}} 
                        <!-- mange members اللينك يودي على صفحة الاعضاء-->
                        <span><a href="/{{$language}}/admin/managemember">{{count($users)}}</a></span>
                    </div>

                </div>  
            </div>

            <div class="col-md-3">
                <div class="stat st-pending">
                <span class="glyphicon glyphicon-ban-circle icon pull-left"></span>
                    <div class="info">
                        {{__('Pending')}} {{__(' Members')}} 
                        <!-- panding page here -->
                        <span><a href="/{{$language}}/admin/pendingmember">{{$pending}}</a></span>
                    </div>
                </div>           
            </div>

            <div class="col-md-3">
                <div class="stat st-items">
                <span class="glyphicon glyphicon-tags icon pull-left"></span>
                <div class="info">
                    {{__('Total')}} {{__('Items')}}
                    <span><a href="/{{$language}}/admin/managemember">1300</a></span>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="stat st-comments"> 
                <span class="glyphicon glyphicon-comment icon pull-left"></span>
                <div class="info">
                    {{__('Total')}} {{__('Comments')}}
                    <span><a href="/{{$language}}/admin/managemember">3000</a></span>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>


<div class="">
    <div class="container latest">
        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <span class="glyphicon glyphicon-user icon"></span> {{__('Latest')}}  {{__('Users')}} 
                    </div>
                    <div class="panel-body">
                        <ul class="list-unstyled latest-user">

                             <?php $i=0;?>
                            @foreach($users as $user)
                                @if ($i<5)
                                    <li> {{$user->name}} <span class="btn btn-success pull-right"><a href="/{{$language}}/admin/editmember/{{$user->id}}">  
                                    <span class="glyphicon glyphicon-edit icon"></span> {{__('Edit')}}</a></span></li>
                                    <?php ++$i;?>
                                @endif
                            @endforeach 
                        
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <span class="glyphicon glyphicon-tags icon"></span> {{__('Latest Items')}} 
                    </div>
                    <div class="panel-body">
                        <ul class="list-unstyled latest-user">
                        
                            <li> itemname <span class="btn btn-success pull-right"><a href="/{{$language}}/admin/edititems/{{$user->id}}">  
                            <span class="glyphicon glyphicon-edit icon"></span> {{__('Edit')}}</a></span>

                            <button class="btn btn-info pull-right "  type="submit">
                            <a href="" > <span class="glyphicon glyphicon-ok icon"></span>{{__('Approve')}} </a>
                            </button> 
                           
                        </li>


                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
      


@endsection