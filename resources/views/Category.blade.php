
@extends('layout_front')
@section('index')
<div class="container">
    <h1 class="text-center"> {{__(' Category Name')}}</h1>
    <div class="row">
        @foreach ($items as $item)
        <div class=" col-sm-6 col-md-3">
            <div class="thumbnail item-box">
                <span class="price-box">{{$item->price}}$</span>
                <img class="img-responsive" src="/img2.jpg" alt="item"/>
                <div class="caption">
                <a href="/{{$language}}/showitem/{{$item->id}}"> <h3>{{$item->name}} </h3> </a>
                <p> {{$item->description}}</p>
                </div>
                <div class="info">
                    <span class="username pull-right"> <a>{{$item->user->name}}</a> </span>
                </div>
            </div>
        </div> 
        @endforeach
    </div>
</div>


@endsection