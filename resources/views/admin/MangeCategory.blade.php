
@extends('admin/layout')
@section('index')

<h1 class="text-center">Mange Categories</h1>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading"> <h2>Mange Categories</h2></div>
            <div class="panel-body categories">
                <div class="cat">
                    <div class="hidden-buttens">
                        <a href="#" >
                        <butten class="btn btn-primary btn-l">  
                        <span class="glyphicon glyphicon-pencil icon"></span>  Edit </butten> 
                        </a>
                        <a href="#" >
                        <butten class="btn btn-danger btn-l">  
                        <span class="glyphicon glyphicon-remove icon"></span>  Delete </butten> 
                        </a>
                    </div>
                    <h3>category name</h3>
                    <p> this is discription </p>
                    <span class="visibility">Hidden  </span>
                    <span class="Comment">Comments Disabled  </span>
                    <span class="ads"> No Ads </span>
                </div>
                <hr/>

                <div class="cat">
                    <div class="hidden-buttens">
                        <a href="#" >
                        <butten class="btn btn-primary btn-l">  
                        <span class="glyphicon glyphicon-pencil icon"></span>  Edit </butten> 
                        </a>
                        <a href="#" >
                        <butten class="btn btn-danger btn-l">  
                        <span class="glyphicon glyphicon-remove icon"></span>  Delete </butten> 
                        </a>
                    </div>
                    <h3>category name</h3>
                    <p> this is discription </p>
                    <span class="visibility">Hidden  </span>
                    <span class="Comment">Comments Disabled  </span>
                    <span class="ads"> No Ads </span>
                </div>
                <hr/>

                <div class="cat">
                    <div class="hidden-buttens">
                        <a href="#" >
                        <butten class="btn btn-primary btn-l">  
                        <span class="glyphicon glyphicon-pencil icon"></span>  Edit </butten> 
                        </a>
                        <a href="#" >
                        <butten class="btn btn-danger btn-l">  
                        <span class="glyphicon glyphicon-remove icon"></span>  Delete </butten> 
                        </a>
                    </div>
                    <h3>category name</h3>
                    <p> this is discription </p>
                    <span class="visibility">Hidden  </span>
                    <span class="Comment">Comments Disabled  </span>
                    <span class="ads"> No Ads </span>
                </div>
                <hr/>
                
            </div>
    </div>

</div>


@endsection