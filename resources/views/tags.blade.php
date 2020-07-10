
@extends('layout_front')
@section('index')
<div class="container">
    <h1 class="text-center"> {{__(' Tag Name')}}</h1>
    <div class="row">
        <div class=" col-sm-6 col-md-3">
            <div class="thumbnail item-box">
                <span class="price-box">10$</span>
                <img class="img-responsive" src="/img2.jpg" alt="item"/>
                <div class="caption">
                    <a> <h3>{{__(' item Name')}} </h3> </a>
                    <p>description description description description
                    description description description</p>
                </div>
                <div class="info">
                    <span class="date"> <span class="glyphicon glyphicon-calendar icon"></span>2/3/10001</span> <br>
                    <span class="username pull-right"> <a>{{__(' Category Name ')}}</a> </span>
                </div>
            </div>
        </div>   
 
        <div class=" col-sm-6 col-md-3">
                <div class="thumbnail  item-box">
                <span class="price-box">10$</span>
                <img class="img-responsive" src="/img2.jpg" alt="item"/>
                <div class="caption">
                    <!--لينك يودي على صفحة الايتم ده --->
                    <a> <h3>item name</h3> </a>
                    <p>description description description description
                    description description description</p>
                </div>
                <div class="info">
                    <span class="date"> <span class="glyphicon glyphicon-calendar icon"></span>2/3/10001</span> <br>
                    <span class="username pull-right"> <a>mohamed ali</a> </span>
                </div>
            </div>
        </div>

        <div class=" col-sm-6 col-md-3">
            <div class="thumbnail  item-box">
                <span class="price-box">10$</span>
                <img class="img-responsive" src="/img2.jpg" alt="item"/>    
                <div class="caption">
                    <a> <h3>item name</h3> </a>
                    <p>description description description description
                    description description description</p>
                </div>
                <div class="info">
                    <span class="date"> <span class="glyphicon glyphicon-calendar icon"></span>2/3/10001</span> <br>
                    <span class="username pull-right"> <a>mohamed ali</a> </span>
                </div>
            </div>
        </div>

        <div class=" col-sm-6 col-md-3">
            <div class="thumbnail  item-box">
                <span class="price-box">10$</span>
                <img class="img-responsive" src="/img2.jpg" alt="item" />
                <div class="caption">
                    <a> <h3>item name</h3> </a>
                    <p>description description description description
                    description description description</p>
                </div>
                <div class="info">
                    <span class="date"> <span class="glyphicon glyphicon-calendar icon"></span>2/3/10001</span> <br>
                    <span class="username pull-right"> <a>mohamed ali</a> </span>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection