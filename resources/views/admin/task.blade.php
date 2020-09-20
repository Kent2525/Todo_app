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

  <!-- ヘッダー -->
  <body>
    <nav class="navbar navbar-default bg-primary text-white">
      <div class="container-fluid">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
          <a class="navbar-brand text-white" href="#">Todo</a>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
              <a class="btn btn-primary" href="/login">ログイン</a>
              <a class="btn btn-primary" href="/register">新規登録</a>
              
          </li>
        </ul>
      </div>
    </nav>

    <!-- メインコンテンツ -->
    <div class="main">
      <div class="row">
        <div class="col-3  mx-aut">
          <div class="left-title-box my-4 mx-5">
            <p><a class="" data-toggle="modal" data-target="#titleModal">+タイトル追加</a></p>
            <!-- 左側のタイトル追加Modal -->
            <div id="titleModal" class="modal fade" role="dialog">
              <div class="modal-dialog">             
                <!-- Modal content-->
                <div class="modal-content">
                   <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                  </div>
                  <div class="modal-body">
                    <h4 class="text-center">タイトル追加</h4>
                    <form action="{{ action('TaskController@create') }}" method="post">
                      <div class="form-group">
                        <input id="title" type="text" name="title" class="form-control">
                      </div>
                      {{ csrf_field() }}
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">追加</button>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                  </div>
                </div>             
              </div>
            </div>

            <!-- 左側のタイトルループ処理 -->
            <ul class="list-group">
              @foreach($titles as $title)
              <div class="titleLoop section">
                <a href="{{ route('admin.task', ['id' => $title->id]) }}" class="list-group-item border-0 bg-light title" style="display: inline-block">
                  {{ $title->title }}</a>
                <img class="titleIcon" src="{{ asset('image/deleteIcon.jpeg') }}" alt="delete" style="float: right; margin-left: 10px; margin-top: 12px;" data-toggle="modal" data-target="#deleteModal{{$title->id}}">
                  
                  <!-- タイトル削除のモーダル -->
                  <div id="deleteModal{{$title->id}}" class="modal fade" role="dialog">
                    <div class="modal-dialog">          
                      Modal content
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title"></h4>
                        </div>
                        <div class="modal-body">
                          <h4 class="text-center">{{$title->title}}</h4>
                          <p class="text-center my-4" style="font-size: 15px;">このTodoを削除しますか？</p>
                          <div class="text-center">
                            <a href="{{ action('TaskController@delete', ['id' => $title->id]) }}"  class="btn btn-danger">削除</a>
                          </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                        </div>
                      </div>             
                    </div>
                  </div>

                <img class="titleIcon editModal" src="{{ asset('image/editIcon.jpeg') }}" alt="edit" style="float: right; margin-top: 12px;" data-toggle="modal" data-target="#editTitleModal" data-title="{{$title->title}}" data-id_title="{{ $title->id }}"> 
                <div id="editTitleModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">          
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                      </div>
                      <div class="modal-body">
                        <h4 class="text-center">タイトル変更</h4>
                        <form action="{{ action('UpdateTitleController@update') }}" method="post">
                          <div class="form-group">
                            <input id="inputModal" type="text" name="title" class="form-control" value="">
                          </div>
                          {{ csrf_field() }}
                          <input id="inputIdTitle" type="hidden" name="id" value="">
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">変更</button>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                      </div>
                    </div>             
                  </div>         
                </div>
              @endforeach
            </ul>
          </div>
        </div>
        
        <!-- 右側の見出しのView -->
        <div class="col-9 mx-auto bg-white">
          <div class="right-title-box my-4 mx-5">
            <p class="test">見出し</p>
            <ul class="list-group">
               @foreach($currentTitle->contents as $content)
                  <li><a class="list-group-item headingIndex heading_modal ml-2" data-toggle="modal" data-target="#myModal" data-heading="{{$content->heading}}" data-body="{{$content->body}}" data-id="{{ $content->id }}" >{{$content->heading}}
                  </a></li>
               @endforeach
            </ul>

            <!-- 右側の見出しクリックModal -->
            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog"> 
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                  </div>
                  <div class="modal-body">
                    <div class="contentTitleBox text-center">
                      <h4 class="text-center" style="display: inline-block;">{{$currentTitle->title}}</h4>
                      <a href="{{ action('ContentController@delete', ['id' => $content->id]) }}"  class="btn btn-danger text-right" style="float: right";>削除</a>
                    </div>
                    <form action="{{ action('ContentController@update') }}" method="post">
                      <div class="form-group">
                        <label for="inputHeading_modal">見出し</label>
                        <input id="inputHeading_modal" type="text" name="heading" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="inputBody_modal">メモ</label>
                        <textarea id="inputBody_modal" type="text" name="body" class="form-control" row="5"></textarea>
                      </div>
                      {{ csrf_field() }}
                      <input type="hidden" id="modal_id" name="id" value="">
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block mt-4">更  新</button>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                  </div>
                </div>             
              </div>
            </div>
            <a type="button" class="btn btn-primary mt-3 text-white" data-toggle="modal" data-target="#addHeadingModal">追加</a>

            <!-- 右側の見出しの追加ボタンModal -->
            <div id="addHeadingModal" class="modal fade" role="dialog">
              <div class="modal-dialog">          
                <!-- Modal content-->
                <div class="modal-content">
                   <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                  </div>
                  <div class="modal-body">
                    <h4 class="text-center">見出し追加</h4>
                    <form action="{{ action('AddHeadingController@create') }}"  method="post">
                    <input type="hidden" name="id" value="{{$currentTitle->id}}">
                      <div class="form-group">
                        <input id="title" type="text" name="heading" class="form-control">
                      </div>
                      {{ csrf_field() }}
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">追加</button>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                  </div>
                </div>             
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- モータルへデータを送るjavascript -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script>
 // heading-modal（ループしているデータ）をクリックした時に
 $('.heading_modal').on('click', function() {
      // このdata('heading')（data-title="ドルcontent->heading"）をheadingに代入
      var heading = $(this).data('heading');
      // このdata('body')（data-body="ドルcontent->body"）をtitleに代入
      var body = $(this).data('body');

      // '#inputHeading_modal'に対してtitleを埋める
      $('#inputHeading_modal').val(heading);
      // '#inputBody_modal'のvalueにbodyを設定する。
      $('#inputBody_modal').val(body);

      var id = $(this).data('id');
      $('#modal_id').val(id);
    });

 $('.editModal').on('click', function() {
      var title = $(this).data('title');
      $('#inputModal').val(title);

      var id_title = $(this).data('id_title');
      $('#inputIdTitle').val(id_title);
    });


    </script>
  </body>
</html>