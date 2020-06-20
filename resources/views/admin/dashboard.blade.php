@extends('admin/layout')
@section('index')

<div class="home-stats">
    <div class="container  text-center " >
        <h1 class="text-center">Dashboard</h1>
        <div class="row">
            <div class="col-md-3">
                <div class="stat st-members"> 
                    Total Members
                    <!-- mange members اللينك يودي على صفحة الاعضاء-->
                    <span><a href="/{{$language}}/admin/managemember">30</a></span>
                </div>  
            </div>

            <div class="col-md-3">
                <div class="stat st-pending">
                    Pending Members 
                    <!-- panding page here -->
                    <span><a href="/{{$language}}/admin/pendingmember">30</a></span>
                </div>           
            </div>

            <div class="col-md-3">
                <div class="stat st-items">
                    Total Items
                    <span><a href="/{{$language}}/admin/managemember">1300</a></span>
                </div>
            </div>

            <div class="col-md-3">
                <div class="stat st-comments"> 
                    Total Comments
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
                        <i class="fa fa-users"></i> Latest Registerd Users
                    </div>
                    <div class="panel-body">
                        test
                    </div>
                </div>
            </div>
            
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-users"></i> Latest Items
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