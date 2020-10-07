<!DOCTYPE html>
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
      <link href="{{ asset('js/app.js') }}" rel="stylesheet">
      <!-- <link rel="stylesheet" href="/css/app.css"> -->
      <!-- <link rel="stylesheet" href="/css/admin.css">        -->
</head>
<body class="bg-white">
  <nav class="navbar navbar-default bg-primary navbar-light">
    <div class="container-fluid">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a class="navbar-brand text-white" href="/">Todo</a>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item navbar-light">
          @if(Auth::check())
            <a class="btn btn-primary text-white" href="/admin/task">{{ Auth::user()-> name }}さんページ</span>
            <a class="btn btn-primary" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
              ログアウト
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          @else
            <a class="btn btn-primary" href="/login">ログイン</a>
            <a class="btn btn-primary" href="/register">新規登録</a>
          @endif
        </li>
      </ul>
    </div>
  </nav>
  @yield('content')
</body>
</html>