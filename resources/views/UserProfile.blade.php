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
            <ul class="list-unstyled">
                <li> <span> {{__('Name')}} </span> : {{__('mohamed ahmed')}} </li>
                <li> <span> {{__('E-mail')}} </span> : {{__('mohamed ahmed')}} </li>
                <li> <span> {{__('Full Name')}} </span> : {{__('mohamed ahmed')}} </li>
                <li> <span> {{__('Register Date')}} </span> : {{__('mohamed ahmed')}} </li>
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
                    <!---start first ad---->
                    <div class=" col-sm-6 col-md-3">
                        <div class="thumbnail item-box">
                            <span class="price-box">10$</span>
                            <img class="img-responsive" src="/img2.jpg" alt="item"/>
                            <div class="caption">
                                <!--- اللينك يودي على show items-->
                                <a href="#"> <h3>{{__(' item Name')}} </h3> </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum vitae voluptates 
                                consequatur explicabo impedit? Exercitationem quibusdam assumenda, pariatur mollitia asperiores
                                nihil culpa voluptatem, </p>
                            </div>
                            <div class="add-date">2/2/2020</div>
                            <div class="info">
                                <span class="views"> <span class="glyphicon glyphicon-eye-open"></span> 10  </span>
                                <span class="btn btn-primary pull-right"><a href="#">  
                                <span class="glyphicon glyphicon-edit icon"></span> {{__('Edit')}}</a></span>
                            </div>
                        </div>
                    </div>
                    <!---end first ad---->

                    <!---start first ad---->
                    <div class=" col-sm-6 col-md-3">
                        <div class="thumbnail item-box">
                            <span class="price-box">10$</span>
                            <img class="img-responsive" src="/img2.jpg" alt="item"/>
                            <div class="caption">
                                <!--- اللينك يودي على show items-->
                                <a href="#"> <h3>{{__(' item Name')}} </h3> </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum vitae voluptates 
                                consequatur explicabo impedit? Exercitationem quibusdam assumenda, pariatur mollitia asperiores
                                nihil culpa voluptatem, </p>
                            </div>
                            <div class="add-date">2/2/2020</div>
                            <div class="info">
                                <span class="views"> <span class="glyphicon glyphicon-eye-open"></span> 10  </span>
                                <span class="btn btn-primary pull-right"><a href="#">  
                                <span class="glyphicon glyphicon-edit icon"></span> {{__('Edit')}}</a></span>
                            </div>
                        </div>
                    </div>
                    <!---end first ad---->

                    <!---start first ad---->
                    <div class=" col-sm-6 col-md-3">
                        <div class="thumbnail item-box">
                            <span class="price-box">10$</span>
                            <img class="img-responsive" src="/img2.jpg" alt="item"/>
                            <div class="caption">
                                <!--- اللينك يودي على show items-->
                                <a href="#"> <h3>{{__(' item Name')}} </h3> </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum vitae voluptates 
                                consequatur explicabo impedit? Exercitationem quibusdam assumenda, pariatur mollitia asperiores
                                nihil culpa voluptatem, </p>
                            </div>
                            <div class="add-date">2/2/2020</div>
                            <div class="info">
                                <span class="views"> <span class="glyphicon glyphicon-eye-open"></span> 10  </span>  
                                <span class="btn btn-primary pull-right"><a href="#">  
                                <span class="glyphicon glyphicon-edit icon"></span> {{__('Edit')}}</a></span>                 
                            </div>
                        </div>
                    </div>
                    <!---end first ad---->

                    <!---start first ad---->
                    <div class=" col-sm-6 col-md-3">
                        <div class="thumbnail item-box">
                            <span class="price-box">10$</span>
                            <img class="img-responsive" src="/img2.jpg" alt="item"/>
                            <div class="caption">
                                <!--- اللينك يودي على show items-->
                                <a href="#"> <h3>{{__(' item Name')}} </h3> </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum vitae voluptates 
                                consequatur explicabo impedit? Exercitationem quibusdam assumenda, pariatur mollitia asperiores
                                nihil culpa voluptatem, </p>
                            </div>
                            <div class="add-date">2/2/2020</div>
                            <div class="info">
                                <span class="views"> <span class="glyphicon glyphicon-eye-open"></span> 10  </span>
                                <span class="btn btn-primary pull-right"><a href="#">  
                                <span class="glyphicon glyphicon-edit icon"></span> {{__('Edit')}}</a></span>
                            </div>
                        </div>
                    </div>
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab culpa, facilis assumenda excepturi numquam obcaecati.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab culpa, facilis assumenda excepturi numquam obcaecati.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab culpa, facilis assumenda excepturi numquam obcaecati.</p>
            </div>
        </div>
    </div>
</div>

@endsection