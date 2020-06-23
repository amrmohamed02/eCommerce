@extends('admin/layout')
@section('index')

<h1 class="text-center">Manage Categories</h1>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading"> <h2>Manage Categories</h2></div>
            <div class="panel-body categories">
                @foreach ($category as $cat)
                    <div class="cat">
                        <div class="hidden-buttens">
                            <a href="#" >
                            <button class="btn btn-primary btn-l">  
                            <span class="glyphicon glyphicon-pencil icon"></span>  Edit </button> 
                            </a>
                        <a href="/{{$language}}/admin/managecategory/{{$cat->id}}" >
                            <button class="btn btn-danger btn-l" onclick="return confirmation()">  
                            <span class="glyphicon glyphicon-remove icon"></span>  Delete </button> 
                            </a>
                        </div>
                        <h3>{{$cat->name}}</h3>
                        @if ($cat->description=='')
                            <p>This category has no description</p>
                        @else
                            <p>{{$cat->description}}</p> 
                        @endif
                        
                        @if ($cat->visibilty=='1')
                            <span class="visibility">Hidden  </span>
                        @else
                            <span class="visibility">showen  </span>
                        @endif
                        
                        @if ($cat->allow_comment=='1')
                            <span class="Comment">Comments Disabled  </span>
                        @else
                            <span class="Comment">Comments Enabled  </span>
                        @endif

                        @if ($cat->allow_ads=='1')
                            <span class="ads">Ads Disabled  </span>
                        @else
                            <span class="ads">Ads Enabled  </span>
                        @endif
                    </div>
                    <hr/>
                @endforeach
                
            </div>
    </div>
    <a href="/{{$language}}/admin/addcategory" class="btn btn-primary"> <i class="fa fa-plus"></i>New Category </a>

</div>
<script type="text/javascript">
    function confirmation() {
      return confirm('Are you sure you want to do this?');
    }
</script>
@endsection