
<?php
  $language=App::getlocale();
?>
<html>
    <head>
        <meta cherset="UTF-8"/>
        <title> Admin </title>
        <link rel="stylesheet" href="/admin/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="/admin/css/front.css"/>
    </head>
    <body>
      <div class="upper-bar container">
        <a> <span class="pull-right">Login||Signup</span> </a>
        <span class="pull-left">Welcom <strong>{{__('mohamed')}}</strong> </span>
        <a href="#"> <span class="pull-left">MyProfile</span> </a>
        <a href="#"> <span class="pull-left">Logout</span> </a>
      </div>
      {{-- @if(session('userid')) --}}
        {{-- start navbar --}}
        <nav class="navbar navbar-inverse">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-nav" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index"> {{__('HomePage')}} </a>
              </div>
              <div class="collapse navbar-collapse" id="app-nav">
                <ul class="nav navbar-nav navbar-right">
                  <li ><a href="/{{$language}}/CategoryPage" target="_blank"> {{__('CategoryOne')}}</a></li>
                  <li ><a href="/{{$language}}/CategoryPage" target="_blank"> {{__('CategoryOne')}}</a></li>
                  <li ><a href="/{{$language}}/CategoryPage" target="_blank"> {{__('CategoryOne')}}</a></li>
                  <li ><a href="/{{$language}}/CategoryPage" target="_blank"> {{__('CategoryOne')}}</a></li>
                  <li ><a href="/{{$language}}/CategoryPage" target="_blank"> {{__('CategoryOne')}}</a></li>
                  <li ><a href="/{{$language}}/CategoryPage" target="_blank"> {{__('CategoryOne')}}</a></li>
                </ul>
              </div>
            </div>
          </nav>
        {{-- @endif --}}
          {{-- end navbar --}}
          
          @yield('index')
{{-- start footer --}}
        <div class="footer"></div>

        <script src="/admin/js/admin.js"></script>
        <script src="/admin/js/jquery-3.5.1.min.js"></script>
        <script src="/admin/js/bootstrap.min.js"></script>
    </body>
</html>
{{-- end footer --}}