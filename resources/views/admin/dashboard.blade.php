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
                <span><a href="/{{$language}}/admin/manageitem">{{count($items)}}</a></span>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="stat st-comments"> 
                <span class="glyphicon glyphicon-comment icon pull-left"></span>
                <div class="info">
                    {{__('Total')}} {{__('Comments')}}
                    <span><a href="/{{$language}}/admin/comments">{{count($comments)}}</a></span>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>


<div class="latest">
    <div class="container ">
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
                                    <span class="glyphicon glyphicon-edit icon"></span> {{__('Edit')}}</a></span>
                                    </li>
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
                            <?php $i=0;?>
                            @foreach($items as $item)
                                @if ($i<5)
                                    <li> {{$item->name}} <span class="btn btn-success pull-right"><a href="/{{$language}}/admin/edititem/{{$item->id}}">  
                                    <span class="glyphicon glyphicon-edit icon"></span> {{__('Edit')}}</a></span>
                                    @if ($item->approve==0)
                                    <button class="btn btn-info pull-right "  type="submit">
                                    <a class="btn btn-info" href="/admin/approveitem/{{$item->id}}"> <span class="glyphicon glyphicon-ok icon"></span>{{__('Approve')}} </a>
                                    </button> 
                                    @endif
                                    </li>
                                    <?php ++$i;?>
                                @endif
                            @endforeach
                        </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <span class="glyphicon glyphicon-comment icon"></span> {{__('Latest')}}  {{__('Comments')}} 
                    </div>
                    <div class="panel-body">
                        <ul class="list-unstyled latest-user">
                            <?php $i=0;?>
                            @foreach($comments as $comment)
                                @if ($i<5)
                                <form >
                                    @csrf
                                    <div class="comment-box"> 
                                    <span class="member-name"><a href="/{{$language}}/admin/editmember/{{$comment->user->id}}" target="_blank">{{$comment->user->name}}</a></span>
                                    <p class="member-com">{{$comment->comment}}</p>     
                                        
                                        <button class="btn btn-success pull-right "  type="submit">
                                        <a href="/{{$language}}/admin/editcomment/{{$comment->id}}" > <span class="glyphicon glyphicon-edit icon"></span>{{__('Edit')}} </a>
                                        </button> 

                                        <button onclick="return confirmation()" class="btn btn-danger pull-right " formmethod="POST" formaction="/{{$language}}/admin/comments/{{$comment->id}}" type="submit">
                                        <span class="glyphicon glyphicon-remove icon"></span>{{__('Delete')}}
                                        </button> 
                                    </div>
                                    <form>
                                    <?php ++$i;?>
                                @endif
                            @endforeach 

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
      
<script type="text/javascript">
    function confirmation() {
      return confirm('Are you sure you want to do this?');
    }
</script>

@endsection