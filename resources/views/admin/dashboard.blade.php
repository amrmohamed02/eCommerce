@extends('admin/layout')
@section('index')

<div class="home-stats">
    <div class="container  text-center " >
        <h1 class="text-center"> {{__('Dashboard')}}</h1>
        <div class="row">
            <div class="col-md-3">
                <div class="stat st-members"> 
                {{__('Total')}} {{__('Members')}} 
                    <!-- mange members اللينك يودي على صفحة الاعضاء-->
                    <span><a href="/{{$language}}/admin/managemember">{{count($users)}}</a></span>
                </div>  
            </div>

            <div class="col-md-3">
                <div class="stat st-pending">
                {{__('Pending')}} {{__(' Members')}} 
                    <!-- panding page here -->
                    <span><a href="/{{$language}}/admin/pendingmember">{{$pending}}</a></span>
                </div>           
            </div>

            <div class="col-md-3">
                <div class="stat st-items">
                {{__('Total')}} {{__('Items')}}
                    <span><a href="/{{$language}}/admin/managemember">1300</a></span>
                </div>
            </div>

            <div class="col-md-3">
                <div class="stat st-comments"> 
                {{__('Total')}} {{__('Comments')}}
                    <span><a href="/{{$language}}/admin/managemember">3000</a></span>
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
                        <i class="fa fa-users"></i> {{__('Latest')}}  {{__('Users')}}  
                    </div>
                    <div class="panel-body">
                        <ul class="list-unstyled latest-user">
                            <!--- لينك الايدت هيبقى موجود جوا طبعا بس معرفتش اعمله عشان الداتا بيز بايظة--->
                             <?php $i=0;?>
                            @foreach($users as $user)
                                @if ($i<5)
                                    <li>{{$user->name}} <span class="btn btn-success pull-right"><a href="/{{$language}}/admin/editmember/{{$user->id}}"> {{__('E-mail')}}Edit</a></span></li>
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
                        <i class="fa fa-users"></i> {{__('Latest Items')}} 
                    </div>
                    <div class="panel-body">
                        test
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
      


@endsection