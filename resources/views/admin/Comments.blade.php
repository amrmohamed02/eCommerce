@extends('admin/layout')
@section('index')
<h1 class="text-center" > {{__('Manage')}} {{__('Comments')}}</h1>

<div class="container">
    <div class="table-responsive">
        <table class=" main-table text-center table table-bordered">

            <tr>
                <td> {{__('#ID')}}</td>
                <td>  {{__('Comment')}}</td>
                <td>  {{__('Item Name')}}</td>
                <td>  {{__('User Name')}}</td>
                <td>   {{__('Added')}} {{__('Date')}}</td>
                <td> {{__('Control')}}</td>
            </tr>

            <form>
                  
                <tr>
                    <td>1</td>
                    <td>this is my comment</td>
                    <td>item name</td>
                    <td>mohamed ali</td>
                    <td>1111</td>
                    <td>
                        <a href="/admin/editmember" class="btn btn-success">
                        <span class="glyphicon glyphicon-edit icon"></span> {{__('Edit')}} </a>


                        <button class="btn btn-danger confirm" type="submit" onclick="return confirmation()">
                        <span class="glyphicon glyphicon-remove"></span> {{__('Delete')}}
                        </button>

                        <button class="btn btn-info "  type="submit">
                        <a href="" > <span class="glyphicon glyphicon-ok icon"></span>{{__('Approve')}} </a>
                        </button> 

                    </td>
                </tr>
            </form>
 
        </table>

    </div>


</div>
<script type="text/javascript">
    function confirmation() {
      return confirm('Are you sure you want to do this?');
    }
</script>

@endsection