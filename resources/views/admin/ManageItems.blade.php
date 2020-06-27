@extends('admin/layout')
@section('index')

<h1 class="text-center"> {{__('Manage')}} {{__('Itema')}} </h1>
<div class="container">
    <div class="table-responsive">
        <table class=" main-table text-center table table-bordered">
            <tr>
                <td>#ID</td>
                <td>Name</td>
                <td>Descriotion</td>
                <td>Price</td>
                <td>Adding Date </td>
                <td>Control</td>
            </tr>
            <form >                   
                <tr>
                    <td>1</td>
                    <td>mmmmm</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="admin/editmember" class="btn btn-success"><span class="glyphicon glyphicon-edit icon"> Edit</a>
                        <a href="admin/managemember" class="btn btn-danger confirm" onclick="return confirmation()"> 
                        <span class="glyphicon glyphicon-remove"> Delete</a>
                        <a href="" class="btn btn-info"> <span class="glyphicon glyphicon-ok"> Approve</a>
                    </td>
                </tr>
            </form>
        </table>
    </div>
    <a href=admin/addmember" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"></span>New item </a>
</div>
<script type="text/javascript">
    function confirmation() {
      return confirm('Are you sure you want to do this?');
    }
</script>

@endsection
