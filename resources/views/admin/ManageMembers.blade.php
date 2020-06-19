@extends('admin/layout')
@section('index')

<script>
function myFunction() {
  confirm("Are you sure !");
}
</script>

<h1 class="text-center">Manage Mambers</h1>

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
                <form method="POST" action="/{{$language}}/admin/managemember/{{$user->id}}">
                    @csrf
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->name}}</td>
                        <td></td>
                        <td>
                            <a href="/{{$language}}/admin/editmember/{{$user->id}}" class="btn btn-success">Edit</a>
                            <input onclick="myFunction()" type="submit" class="btn btn-danger confirm" value="Delete"/>
                        </td>
                    </tr>
                </form>
            @endforeach
        </table>

    </div>

<a href="/{{$language}}/admin/addmember" class="btn btn-primary"> <i class="fa fa-plus"></i>New Members </a>


</div>


@endsection
