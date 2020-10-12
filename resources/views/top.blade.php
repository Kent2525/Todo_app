@extends('layouts.admin')
@section('title','Todo一覧')

@section('content')
  <div class="text-center mt-3">
    <p>採用ご担当者様はこちらの簡易新規ログインページをご利用下さい。</p>
    <a class="btn btn-primary" href="">簡易新規登録＆ログイン</a>
    <a class="btn btn-primary" href="/todo">Todo一覧</a>
  </div>
  <h1 class="topTitle mt-5 text-center text-info">おかえりTodo</h1>
  <!-- <h3 class="topTitle text-center">- 帰国Todo -</h3> -->
  <div class="text-center" style="margin : 0 auto">
    <img src="{{ asset('image/topWelcome.jpg') }}" style="width: 75%;" alt="top image">
  </div>
  <div style="margin: 0 300px;">
    <h3 class="text-center" style="margin-bottom: 80px;">帰国時の予定を建てましょう</h3>
    <div class="text-center">
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;" onclick="clickTotal1()" type="button">#家族と会う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px" onclick="clickTotal2()" type="button">#買い物に行く</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px" onclick="clickTotal3()">#お土産を買う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px;"  onclick="clickTotal4()">#日本食を食べる</button>
    </div>
    <div class="flex-box my-3">
      <div class="cp_iptxt mr-1">
        <input type="text" id="inputTodoText" placeholder="Todoを入力しましょう">
        <i class="fas fa-list-ul" aria-hidden="true"></i>
      </div>
      <button class="btn btn-outline-primary mr-5" onclick="clickTextTotal()">Todo追加</button>
    </div>
    <form action="{{ action('TopController@create') }}" method="post" name="form1">
      <div class="text-center mt-4">
        <div id="testarea" class="w-100" name="text2" style="border: 1px solid #dbdbdb; height: 150px;"></div>
      </div>
      @csrf
      @if (count($errors) > 0)
          <p class="top-form-alert">Todoタグを選択するか入力フォームでTodo追加をしてください</p>
        @endif
      <div class="flex-box">
        <div class="text-center" style="margin-left: 610px;">
          <div class="btn btn-secondary" onclick="clickClear()" >クリア</div>
          <button id="output-for-listtodo" type="submit" class="btn btn-success" >リストを出力する</button>
        </div>
      </div>  
      <p style="margin-left: 580px;">リストを出力するには登録が必要です。</p>
    </form>  
  </div>
  <div class="tagContainer" style="margin: 80px 270px;">
    <div class="meetContainer">
      <h4 style="margin-bottom: 20px;">人と会う</h4>
      <button class="btn btn_tag btn-primary btn-lg testbutton" style="border-radius: 20px; margin-right: 30px;">#家族と会う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#友達と会う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#恋人に会う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; ">#親戚に会う</button>
    </div>
    <div class="shoppingContainer">
      <h4 style="margin: 20px 0;">買い物</h4>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#服を買う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#化粧を買う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#文房具を買う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; ">#メガネを買う</button>
      <div class="forTagSpace" style="margin: 10px;"></div>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#スーツを買う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#スマホを買う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#PCを買う</button>

    </div>
    <div class="mealContainer">
      <h4 style="margin: 20px 0;">食事</h4>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#日本食を食べる</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#寿司を食べる</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#ラーメンを食べる</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; ">#カレーを食べる</button>
    </div>
    <div class="procedureContainer">
      <h4 style="margin: 20px 0;">手続き関連</h4>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#役所へ行く</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#運転免許の更新</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#住民票手続き</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px;">#大使館へ行く</button>
    </div>
  </div>
  <footer>
    <div class=text-center>
      <p>Copyright ©Welcome Todo All rights reserved.</p>
  </footer>
<script src="{{ asset('/js/clickTag.js') }}"></script>
<script src="{{ asset('/js/generalTop.js') }}"></script>

@endsection
