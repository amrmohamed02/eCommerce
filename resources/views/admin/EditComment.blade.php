@extends('admin/layout')
@section('index')

<h1 class="text-center" >  {{__('Edit')}} {{__('Comments')}} </h1>

<div class="container">

    <form class="form-horizontal" method="POST">
         @csrf
        <div class="form-group  form-group-lg ">
             <label class="col-sm-2 control-label " > {{__('Comment')}} </label>
                <div class="col-sm-10 col-md-6">
                <textarea class="form-control" name="comment">{{$comment->comment}}</textarea>
            </div>
        </div>

        <div class="form-group form-group-lg ">
                <div class=" col-sm-offset-2 col-sm-10">
                <input type="submit" value="{{__('Update')}}" class="btn btn-primary btn-lg" />
            </div>
        </div>        

    </form>

    

 </div>
    

@endsection