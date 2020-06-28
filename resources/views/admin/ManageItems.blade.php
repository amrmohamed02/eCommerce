@extends('admin/layout')
@section('index')

<h1 class="text-center"> {{__('Manage')}} {{__('Itema')}} </h1>
<div class="container">
    <div class="table-responsive">
        <table class=" main-table text-center table table-bordered">
            <tr>
                <td>{{__('#ID ')}} </td>
                <td> {{__('Name')}} </td>
                <td> {{__('Descriotion')}} </td>
                <td> {{__('Price')}} </td>
                <td>   {{__('Adding')}}{{__('Date')}}</td>
                <td> {{__('Control')}}</td>
            </tr>
            <form >                   
                <tr>
                    <td>1</td>
                    <td>mmmmm</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                       
                        <a href="admin/editmember" class="btn btn-success">
                        <span class="glyphicon glyphicon-edit icon"></span> {{__('Edit')}}</a>


                        <a href="admin/managemember" class="btn btn-danger confirm" onclick="return confirmation()"> 
                        <span class="glyphicon glyphicon-remove"></span>{{__('Delete')}} </a>


                        <button class="btn btn-info"  type="submit">
                        <a href="" > <span class="glyphicon glyphicon-ok"></span>{{__('Approve')}} </a>
                        </button>

                        
                    </td>
                </tr>
            </form>
        </table>
    </div>
    <a href=admin/addmember" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"></span> {{__('New')}} {{__('item')}}   </a>
</div>
<script type="text/javascript">
    function confirmation() {
      return confirm('Are you sure you want to do this?');
    }
</script>

@endsection
