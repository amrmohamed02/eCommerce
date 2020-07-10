@extends('layout_front')
@section('index')
<h1 class="text-center">{{__('Welcome')}} {{$user->name}}</h1>
<div class="information block">
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading"> <span class="glyphicon glyphicon-user"></span>{{__('My Informations')}}</div>
            <div class="panel-body">
        
            <span class="btn btn-primary pull-right"><a href="#">  
            <span class="glyphicon glyphicon-edit icon"></span> {{__('Edit')}}</a></span>
            <ul class="list-unstyled">
                <li> <span> {{__('Name')}} </span> : {{$user->name}} </li>
                <li> <span> {{__('E-mail')}} </span> : {{$user->email}} </li>
                <li> <span> {{__('UserName')}} </span> : {{$user->username}} </li>
                <li> <span> {{__('Register Date')}} </span> : {{$user->created_at}} </li>
            </ul>
            </div>
        </div>
    </div>
</div>

<div class="ads block">
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading"> <span class="glyphicon glyphicon-picture"></span> {{__('Latest Ads')}}
            <span class="pull-right"> <a href="#">see your ads</a></span>
            <span class="pull-right"> <a href="#">Creat new ad</a></span>
            </div>
            <div class="panel-body">
                <div class="row">
                    <?php $i=0;?>
                    @foreach ($items as $item)
                    @if($i<4)
                    <div class=" col-sm-6 col-md-3">
                        <div class="thumbnail item-box">
                        <span class="price-box">{{$item->price}} $</span>
                            <img class="img-responsive" src="/img2.jpg" alt="item"/>
                            <div class="caption">
                                <!--- اللينك يودي على show items-->
                            <a href="/{{$language}}/showitem/{{$item->id}}"> <h3>{{$item->name}}</h3> </a>
                            <p>{{$item->description}}</p>
                            </div>
                            <div class="add-date">{{$item->created_at}}</div>
                            <div class="info">
                                @if ($item->approve==0)
                                <span class="wait-aprove">Waiting For Approval </span> <br>
                                @else
                                <span class="accepte">  Accepted </span>
                                @endif
                                <span class="btn btn-primary pull-right"><a href="#">  
                                <span class="glyphicon glyphicon-edit icon"></span> {{__('Edit')}}</a></span>
                            </div>
                        </div>
                    </div>
                    <?php ++$i;?>
                    @endif
                    @endforeach
                    <!---end first ad---->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="my-comments block">
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading"> <span class="glyphicon glyphicon-comment"></span> {{__('Latest Comment')}}</div>
            <div class="panel-body">
                <?php $i=0;?>
                @foreach ($comments as $comment)
                @if($i<4)
                    <p>{{$comment->comment}}</p>
                <?php ++$i;?>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection