@extends('admin/layout')
@section('index')

<h1 class="text-center"> {{__('Manage')}} {{__('Categories')}}</h1>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">  <h2> <span class="glyphicon glyphicon-edit icon"></span> {{__('Manage')}}{{__('Categories')}} </h2>
            <div class="option pull-right">
            <span class="glyphicon glyphicon-sort"></span>{{__('Ordering')}}  : [
            <a href="#" class="active"> {{__('Asc')}}</a> | <a href="#"> {{__('Desc')}}</a> ]
            <span class="glyphicon glyphicon-eye-open"></span> {{__('View')}} : [
            <span> {{__('Classic')}}</span> | <span class="active"> {{__('Full')}}</span> ]
            </div>
        
        </div>
            <div class="panel-body categories">
                @foreach ($category as $cat)
                    <div class="cat">
                        <div class="hidden-buttens">
                            
                            <button class="btn btn-primary btn-l"  type="submit">
                            <a href="/{{$language}}/admin/editcategory/{{$cat->id}}" >  
                            <span class="glyphicon glyphicon-edit icon"></span> {{__('Edit')}}  </button> 
                            </a>
                        <a href="/{{$language}}/admin/managecategory/{{$cat->id}}" >
                            <button class="btn btn-danger btn-l" onclick="return confirmation()"  type="submit">  
                            <span class="glyphicon glyphicon-remove icon"></span> {{__('Delete')}}  </button> 
                            </a>
                        </div>
                        
                        <h3>{{$cat->name}}</h3>
                        <div class="full-view">    
                            @if ($cat->description=='')
                                <p>This category has no description</p>
                            @else
                                <p>{{$cat->description}}</p> 
                            @endif
                            
                            @if ($cat->visibilty=='1')
                                <span class="visibility"> <span class="glyphicon glyphicon-eye-close"></span> {{__('Hidden')}}  </span>
                            @else
                                <span class="visibility"> <span class="glyphicon glyphicon-eye-open"></span> {{__('showen')}}  </span>
                            @endif
                            
                            @if ($cat->allow_comment=='1')
                                <span class="Comment"> <span class="glyphicon glyphicon-remove"></span> {{__('Comments')}}{{__('Disabled')}}   </span>
                            @else
                                <span class="Comment"> <span class="glyphicon glyphicon-comment"></span> {{__('Comments')}}{{__('Enabled')}}   </span>
                            @endif

                            @if ($cat->allow_ads=='1')
                                <span class="ads"> <span class="glyphicon glyphicon-facetime-remove"></span> {{__('Ads')}}{{__('Disabled')}} </span>
                            @else
                                <span class="ads"> <span class="glyphicon glyphicon-facetime-video"></span> {{__('Ads')}}{{__('Enabled')}}   </span>
                            @endif
                        </div>
                    </div>
                    <hr/>
                @endforeach
                
            </div>
    </div>
    <a href="/{{$language}}/admin/addcategory" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"></span>{{__('New')}}{{__('Category')}}   </a>

</div>
<script type="text/javascript">
    function confirmation() {
      return confirm('Are you sure you want to do this?');
    }
</script>


<script type="text/javascript">
$('.cat h3').click(function  (){
    $(this).next('.full-view').fadeToggle();
});
</script>
@endsection