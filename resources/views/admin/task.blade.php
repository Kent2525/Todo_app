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
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        <!-- 下2行はbootstrapのJavascript -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <!-- bootstrapのcss -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

        <!-- Styles -->
        <!-- Laravel標準搭載のcss -->
        <!-- <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet"> -->
        <!-- <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet"> -->
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/admin.css">
        
    </head>
    <body>
      <div class="container">
        <div class="row">
          <div class="col-3 mx-auto bg-secondary">
            <p>左のスペース</p>
          </div>
          <div class="col-9 mx-auto">
            <p class="sample">右のスペース</p>
          </div>
        </div>
      </div>
    </body>
</html>