@extends('admin/layout')
@section('index')

<h1 class="text-center"> {{__('Manage')}} {{__('Item')}} </h1>
<div class="container">
    <div class="table-responsive">
        <table class=" main-table text-center table table-bordered">
            <tr>
                <td>#{{__('ID')}} </td>
                <td> {{__('Name')}} </td>
                <td> {{__('Description')}} </td>
                <td> {{__('Price')}} </td>
                <td> {{__('Adding')}} {{__('Date')}}</td>
                <td> {{__('Control')}}</td>
            </tr>
            @foreach ($items as $item)
                <form method="POST" action="/{{$language}}/admin/manageitem/{{$item->id}}">
                    @csrf
                    <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>
                        <a href="/{{$language}}/admin/edititem/{{$item->id}}" class="btn btn-success">
                        <span class="glyphicon glyphicon-edit icon"></span> {{__('Edit')}}</a>
                        <button class="btn btn-danger" type="submit" onclick="return confirmation()"> 
                        <span class="glyphicon glyphicon-remove"></span>{{__('Delete')}} </button>
                        @if ($item->approve==0)
                            <a class="btn btn-info" href="/{{$language}}/admin/approveitem/{{$item->id}}">
                            <span class="glyphicon glyphicon-ok"></span>{{__('Approve')}}
                            </a>
                        @endif
                        
                    </td>
                </tr>
            </form>
            @endforeach
        </table>
    </div>
<a href="/{{$language}}/admin/additem" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"></span> {{__('New')}} {{__('item')}}   </a>
</div>
<script type="text/javascript">
    function confirmation() {
      return confirm('Are you sure you want to do this?');
    }
</script>

@endsection
