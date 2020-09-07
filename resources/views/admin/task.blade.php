<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <!-- Laravel標準搭載のJavascript -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- 下2行はbootstrapのJavascript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- bootstrapのcss -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="/css/app.css"> -->
    <!-- <link rel="stylesheet" href="/css/admin.css">        -->
  </head>
  <body>
    <nav class="navbar navbar-default bg-primary">
      <div class="container-fluid">
        <div class="navbar-header">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Bootstrapサンプル</a>
        </div>
        <div class="collapse navbar-collapse" id="navigation">
          <p class="navbar-text navbar-right">ozaki25 さんでログイン中</p>
        </div>
      </div>
    </nav>
    <div class="main">
      <div class="row" style="height: 100%;">
        <div class="col-3  mx-auto">
          <div class="left-tttle-box my-4 mx-5">
            <p class="sample">左のスペース</p>
            <ul class="list-group">
              <li class="list-group-item bg-light">{{ $task }}</li>
              <li class="list-group-item bg-light">PHPデータ2</li>
              <li class="list-group-item bg-light">PHPデータ3</li>
              <li class="list-group-item bg-light">PHPデータ4</li>
            </ul>
          </div>
        </div>
        <div class="col-9 mx-auto bg-white">
          <div class="right-tttle-box my-4 mx-5">
            <p class="test">右のスペース</p>
            <ul class="list-group">
              <li class="list-group-item task_index">PHPデータ1</li>
              <li class="list-group-item task_index">PHPデータ2</li>
              <li class="list-group-item task_index">PHPデータ3</li>
              <li class="list-group-item task_index">PHPデータ4</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>