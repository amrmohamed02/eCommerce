@extends('layout_front')
@section('index')
<h1 class="text-center"> {{$item->name}}</h1>
<div class="container">
    <div class="row">
        <div class="col-md-5 item-img">
        <img class="img-responsive img-thumbnail" src="/img2.jpg" alt="item"/>
        </div>
        <div class="col-md-7 item-info">
            <h2> {{$item->category->name}} <span class="glyphicon glyphicon-chevron-right"></span> {{$item->name}}</h2>
            <!---description in this p -->
            <p>{{$item->description}}
            </p>
        <div class="add-date"> <span class="glyphicon glyphicon-calendar icon"></span>{{$item->created_at}}</div>
            <div class="price"> <span class="glyphicon glyphicon-usd icon"></span> Price :{{$item->price}}</div>
            <div class="con-made"> <span class="glyphicon glyphicon-cog icon"></span> Made in : {{$item->country}}</div>
        <div class="cat-name"> <span class="glyphicon glyphicon-tags icon"></span> Category : <a href="/{{$language}}/category/{{$item->category->id}}">{{$item->category->name}}</a> </div>
            <!-- a===>public user profile  --->
            <div class="seller-name"> <span class="glyphicon glyphicon-user icon"></span> Add By : <a href="/{{$language}}/user/{{$item->user->id}}">{{$item->user->name}}</a> </div>
        </div>
    </div>
    <hr class="hr"/>
    <div class="row comment">
        <div class=" col-md-offset-2">
            <form method="POST" action="/{{$language}}/addcomment/{{$item->id}}">
                @csrf
                <div class="com-box col-md-8">
                    <h3>Add Your Comment :</h3>  
                    <textarea class="form-control" name="comment"></textarea>
                    <input class="btn btn-primary" type="submit" value="Add Comment"> 
                </div>
            </form>
            <form method="POST" action="/{{$language}}/addrate/{{$item->id}}">
                @csrf
                <div class="col-md-4 pull-right rate-box">
                    <h3>Your Rate</h3>
                        <ul class="list-unstyled">
                            <li>
                                <button name="rate" value="1"><span class="glyphicon glyphicon-star icon-rate"></span></button>
                                <button name="rate" value="2"><span class="glyphicon glyphicon-star icon-rate"></span></button>
                                <button name="rate" value="3"><span class="glyphicon glyphicon-star icon-rate"></span></button>
                                <button name="rate" value="4"><span class="glyphicon glyphicon-star icon-rate"></span></button>
                                <button name="rate" value="5"><span class="glyphicon glyphicon-star icon-rate"></span></button>
                            </li>
                        </ul>
                    </div>
                     
                </div>
            </form>
        </div>   
    </div>
    
</div>    
<!--comment section--->
<div class="container">
    <hr class="hr"/>
    @foreach ($item->comment as $comment)
        
    <div class="comment-box">
        <div class="row show-com-box">
            <div class="col-sm-2 text-center com-user-name">
                <img class="img-responsive img-thumbnail img-circle center-block" src="/img2.jpg" alt="item">
                {{$comment->user->name}}
            </div>
            <!--comment content-->
            <div class="col-sm-7 com-content">
                <p class="lead" >
                    {{$comment->comment}}
                </p>
            </div>
            <div class="col-sm-3">
            <span class="date"> <span class="glyphicon glyphicon-calendar icon"></span>{{$comment->created_at}}</span> <br>
                <span class="rate">Rate :</span>@for ($i = 0; $i < $item->rate->rate; $i++)
                <span class="glyphicon glyphicon-star icon-rate"></span>
                @endfor
                
            </div>
        </div>
        <hr class="hr"/>
    </div>
    <!--end comment section--->
    @endforeach
    
</div>

@endsection