@extends('admin/layout')
@section('index')

<h1 class="text-center"> {{__('Manage')}} {{__('Member')}} </h1>

<div class="container">
    <div class="table-responsive">
        <table class=" main-table text-center table table-bordered">

            <tr>
                <td> {{__('#ID')}}</td>
                <td>  {{__('Username')}}</td>
                <td>  {{__('Email')}}</td>
                <td>  {{__('Fullname')}}</td>
                <td>   {{__('Register')}} {{__('Date')}}</td>
                <td> {{__('Control')}}</td>
            </tr>
            @foreach ($users as $user)
                <form method="POST" action="/{{$language}}/admin/managemember/{{$user->id}}">
                    @csrf
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>
                            <a href="/{{$language}}/admin/editmember/{{$user->id}}" class="btn btn-success">
                            <span class="glyphicon glyphicon-edit icon"></span> {{__('Edit')}} </a>
                            <button class="btn btn-danger confirm" type="submit" onclick="return confirmation()">
                            <span class="glyphicon glyphicon-remove"></span> {{__('Delete')}}
                            </button>
                        </td>
                    </tr>
                </form>
            @endforeach
        </table>

    </div>

<a href="/{{$language}}/admin/addmember" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"></span> {{__('New')}} {{__('Members')}}  </a>


</div>
<script type="text/javascript">
    function confirmation() {
      return confirm('Are you sure you want to do this?');
    }
</script>

@endsection
