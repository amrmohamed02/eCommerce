@extends('admin/layout')
@section('index')
<h1 class="text-center" > {{__('Manage')}} {{__('Comments')}}</h1>

<div class="container">
    <div class="table-responsive">
        <table class=" main-table text-center table table-bordered">

            <tr>
                <td> #{{__('ID')}}</td>
                <td>  {{__('Comment')}}</td>
                <td>  {{__('Item Name')}}</td>
                <td>  {{__('User Name')}}</td>
                <td>  {{__('Added')}} {{__('Date')}}</td>
                <td>  {{__('Control')}}</td>
            </tr>
            @foreach ($comments as $comment)
            <form method="POST" action="/{{$language}}/admin/comments/{{$comment->id}}">
                @csrf
                <tr>
                <td>{{$comment->id}}</td>
                <td>{{$comment->comment}}</td>
                <td>{{$comment->item->name}}</td>
                <td>{{$comment->user->name}}</td>
                <td>{{$comment->created_at}}</td>
                <td>
                    <a href="/{{$language}}/admin/editcomment/{{$comment->id}}" class="btn btn-success">
                    <span class="glyphicon glyphicon-edit icon"></span> {{__('Edit')}}</a>
                    <button class="btn btn-danger" type="submit" onclick="return confirmation()"> 
                    <span class="glyphicon glyphicon-remove"></span>{{__('Delete')}} </button>
                    @if ($comment->status==0)
                        <a class="btn btn-info" href="/admin/approvecomment/{{$comment->id}}">
                        <span class="glyphicon glyphicon-ok"></span>{{__('Approve')}}
                        </a>
                    @endif
                </td>
            </tr>
        </form>
        @endforeach
        </table>
    </div>


</div>
<script type="text/javascript">
    function confirmation() {
      return confirm('Are you sure you want to do this?');
    }
</script>

@endsection