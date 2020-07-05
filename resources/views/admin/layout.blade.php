
<?php
  $language=App::getlocale();
?>
<html>
    <head>
        <meta cherset="UTF-8"/>
        <title> Admin </title>
        <link rel="stylesheet" href="/admin/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="/admin/css/back.css"/>
    </head>
    <body>
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
                <a class="navbar-brand" href="/{{$language}}/admin/dashboard"> {{__('Home')}} </a>
              </div>
              <div class="collapse navbar-collapse" id="app-nav">
                <ul class="nav navbar-nav">
                  <li ><a href="/{{$language}}/admin/managecategory" target="_blank"> {{__('Categores')}}</a></li>
                  <li ><a href="/{{$language}}/admin/managemember" target="_blank"> {{__('Members')}}</a></li>
                  <li ><a href="/{{$language}}/admin/pendingmember" target="_blank">{{__('Pending')}}{{__('Members')}} </a></li>
                  <li ><a href="/{{$language}}/admin/manageitem" target="_blank">{{__('Items')}}</a></li>
                  <li ><a href="/{{$language}}/admin/comments" target="_blank"> {{__('Comments')}}</a></li>
                  
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Username <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li ><a href="index" target="_blank"> {{__('View')}} {{__('Shop')}} </a></li>
                      <li><a href="#"> {{__('Edit')}}{{__('Profail')}}</a></li>
                      <li><a href="#"> {{__('Settings')}}</a></li>
                    <li><a href="/{{$language}}/admin/logout"> {{__('LogOut')}}</a></li>
                    </ul>
                  </li>
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