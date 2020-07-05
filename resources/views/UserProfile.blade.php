@extends('layout_front')
@section('index')
<h1 class="text-center">Welcome {{__('mohamed')}}</h1>
<div class="information block">
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading"> <span class="glyphicon glyphicon-user"></span>{{__('My Informations')}}</div>
            <div class="panel-body">
        
            <span class="btn btn-primary pull-right"><a href="#">  
            <span class="glyphicon glyphicon-edit icon"></span> {{__('Edit')}}</a></span>

            {{__('mohamed ahmed')}}
            </div>
        </div>
    </div>
</div>

<div class="ads block">
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading"> <span class="glyphicon glyphicon-picture "></span> {{__('Latest Ads')}}</div>
            <div class="panel-body">
            {{__('test')}}
            </div>
        </div>
    </div>
</div>

<div class="my-comments block">
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading"> <span class="glyphicon glyphicon-comment"></span> {{__('Latest Comment')}}</div>
            <div class="panel-body">
            {{__('test')}}
            </div>
        </div>
    </div>
</div>

@endsection