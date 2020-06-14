<!DOCTYPE>
<html>
    <head>
        <meta cherset="UTF-8"/>
        <title> Admin </title>
        <link rel="stylesheet" href="/admin/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="/admin/css/style.css"/>
    </head>
    <body>
      @if(session('userid'))
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
                <a class="navbar-brand" href="#">Home</a>
              </div>
              <div class="collapse navbar-collapse" id="app-nav">
                <ul class="nav navbar-nav">
                  <li ><a href="#">Categores</a></li>
                  <li ><a href="#">Members</a></li>
                  <li ><a href="#">Categores</a></li>
                  <li ><a href="#">Categores</a></li>
                  <li ><a href="#">Categores</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Username <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Edit Profail</a></li>
                      <li><a href="#">Settings</a></li>
                    <li><a href="/{{App::getlocale()}}/admin/logout">LogOut</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        @endif
          {{-- end navbar --}}
          
          @yield('index')
{{-- start footer --}}
        <div class="footer">
        
        </div>
        <script src="/admin/js/admin.js"></script>
        <script src="/admin/js/jquery-3.5.1.min.js"></script>
        <script src="/admin/js/bootstrap.min.js"></script>
    </body>
</html>
{{-- end footer --}}