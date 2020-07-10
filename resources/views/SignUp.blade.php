@extends('layout_front')
@section('index')
<div class="main-container">
    <div class="container signup-page">
        <h1 class="text-center"><span class="signup">Signup</span></h1>
        <form  class="signup">
            <input class="form-control" type="text" name="username" autocomplete="off" placeholder="Username" required />
            <input class="form-control" type="text" name="fullname" autocomplete="off" placeholder="fullname" required />
            <input class="form-control" type="password" name="password" autocomplete="new-password" placeholder="Password" required />
            <input class="form-control" type="password" name="password" autocomplete="new-password" placeholder="Re Password" required />
            <input class="form-control" type="email" name="email" placeholder="E-mail" required />

            <div class="form-group form-group-lg ">
                <label class="col-sm-2 control-label " >  {{__('User Photo')}}</label>
                <div class="col-sm-10 col-md-6">
                    <input type="file" name="avatar" class="form-control avatar" />
                </div>
            </div>
            <input class="btn btn-primary btn-block" type="submit" value="signup" />
        </form>
    </div>
</div>
@endsection