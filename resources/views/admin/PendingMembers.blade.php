@extends('admin/layout')
@section('index')

<h1 class="text-center">Pending Mambers</h1>

<div class="container">
    <div class="table-responsive">
        <table class=" main-table text-center table table-bordered">

            <tr>
                <td>#ID</td>
                <td>Username</td>
                <td>Email</td>
                <td>Fullname</td>
                <td>Register Date </td>
                <td>Control</td>
            </tr>
            @foreach ($users as $user)
                <form method="POST" >
                    @csrf
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>
                            <a href="/{{$language}}/admin/editmember/{{$user->id}}" class="btn btn-success">Edit</a>
                            <a href="/{{$language}}/admin/managemember/{{$user->id}}" class="btn btn-danger confirm" onclick="return confirmation()">Delete</a>
                            <a href="/{{$language}}/admin/pendingmember/{{$user->id}}" class="btn btn-info">Accept</a>
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
