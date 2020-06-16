@extends('admin/layout')
@section('index')

<h1 class="text-center">Mange Mambers</h1>

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

            <tr>
                <td>1</td>
                <td>gggggg</td>
                <td>gggggg</td>
                <td>ggggg</td>
                <td>bbbbbb</td>
                <td>
                    <a href="#" class="btn btn-success">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td>ccccc</td>
                <td>vvvvvv</td>
                <td>vvvvv</td>
                <td>vvvv</td>
                <td>
                    <a href="#" class="btn btn-success">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="#" class="btn btn-success">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="#" class="btn btn-success">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>

        </table>

    </div>

<a href="#" class="btn btn-primary"> <i class="fa fa-plus"></i>New Members </a>


</div>


@endsection
