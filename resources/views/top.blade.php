@extends('layouts.admin')
@section('title','Todo一覧')

@section('content')
  <h3 class="mt-5 text-center">仮トップページ</h3>
  <div class="text-center my-3">
    <a class="btn btn-primary" href="/admin/task">管理画面</a>
  </div>
  <div class="text-center" style="margin : 0 auto">
    <img src="{{ asset('image/welcomeTop5.jpg') }}" style="width: 85%;" alt="welcome Top">
  </div>
  <h3 class="text-center" style="margin-bottom: 80px;">帰国時の予定を建てましょう</h3>
  <div class="text-center">
    <button class="btn btn_tag btn-primary btn-lg" id="defaultTag" style="border-radius: 20px; margin-right: 30px;">#家族と会う</button>
    <button class="btn btn_tag btn-primary btn-lg" id="defaultTag" style="border-radius: 20px; margin-right: 30px">#買い物に行く</button>
    <button class="btn btn_tag btn-primary btn-lg" id="defaultTag" style="border-radius: 20px; margin-right: 30px">#お土産を買う</button>
    <button class="btn btn_tag btn-primary btn-lg" id="defaultTag" style="border-radius: 20px; ">#日本食を食べる</button>
  </div>
  <div class="cp_iptxt">
  <input type="text" placeholder="Todoを入力しましょう">
    <i class="fas fa-list-ul" aria-hidden="true"></i>
  </div>
  <form action="" method="post">
    <div class="text-center mt-4">
      <textarea type="text" placeholder="デフォルトの計画をクリックするか、上記の入力フォームからTodoを作成してください。" style="width: 750px; height: 210px; resize: none;"></textarea>
      <input type="hidden" name="" value=""></input>
    </div>
    <div class="text-center" style="margin-left: 610px;">
      <button class="btn btn-primary">リストを出力する</button>
    </div>  
  </form>  
  <div class="tagContainer" style="margin: 80px 270px;">
    <div class="meetContainer">
      <h4 style="margin-bottom: 20px;">人と会う</h4>
      <button class="btn btn_tag btn-primary btn-lg" id="defaultTag" style="border-radius: 20px; margin-right: 30px;">#家族と会う</button>
      <button class="btn btn_tag btn-primary btn-lg" id="defaultTag" style="border-radius: 20px; margin-right: 30px">#友達と会う</button>
      <button class="btn btn_tag btn-primary btn-lg" id="defaultTag" style="border-radius: 20px; margin-right: 30px">#恋人に会う</button>
      <button class="btn btn_tag btn-primary btn-lg" id="defaultTag" style="border-radius: 20px; ">#親戚に会う</button>
    </div>
    <div class="meetContainer">
      <h4 style="margin: 20px 0;">買い物</h4>
      <button class="btn btn_tag btn-primary btn-lg" id="defaultTag" style="border-radius: 20px; margin-right: 30px;">#服を買う</button>
      <button class="btn btn_tag btn-primary btn-lg" id="defaultTag" style="border-radius: 20px; margin-right: 30px">#化粧を買う</button>
      <button class="btn btn_tag btn-primary btn-lg" id="defaultTag" style="border-radius: 20px; margin-right: 30px">#文房具を買う</button>
      <button class="btn btn_tag btn-primary btn-lg" id="defaultTag" style="border-radius: 20px; ">#メガネを買う</button>
      <div class="forTagSpace" style="margin: 10px;"></div>
      <button class="btn btn_tag btn-primary btn-lg" id="defaultTag" style="border-radius: 20px; margin-right: 30px;">#スーツを買う</button>
      <button class="btn btn_tag btn-primary btn-lg" id="defaultTag" style="border-radius: 20px; margin-right: 30px;">#スマホを買う</button>
      <button class="btn btn_tag btn-primary btn-lg" id="defaultTag" style="border-radius: 20px; margin-right: 30px;">#PCを買う</button>

    </div>
    <div class="meetContainer">
      <h4 style="margin: 20px 0;">食事</h4>
      <button class="btn btn_tag btn-primary btn-lg" id="defaultTag" style="border-radius: 20px; margin-right: 30px;">#日本食を食べる</button>
      <button class="btn btn_tag btn-primary btn-lg" id="defaultTag" style="border-radius: 20px; margin-right: 30px">#寿司を食べる</button>
      <button class="btn btn_tag btn-primary btn-lg" id="defaultTag" style="border-radius: 20px; margin-right: 30px">#ラーメンを食べる</button>
      <button class="btn btn_tag btn-primary btn-lg" id="defaultTag" style="border-radius: 20px; ">#カレーを食べる</button>
    </div>
    <div class="meetContainer">
      <h4 style="margin: 20px 0;">手続き関連</h4>
      <button class="btn btn_tag btn-primary btn-lg" id="defaultTag" style="border-radius: 20px; margin-right: 30px;">#役所へ行く</button>
      <button class="btn btn_tag btn-primary btn-lg" id="defaultTag" style="border-radius: 20px; margin-right: 30px">#運転免許の更新</button>
      <button class="btn btn_tag btn-primary btn-lg" id="defaultTag" style="border-radius: 20px; margin-right: 30px">#住民票手続き</button>
      <button class="btn btn_tag btn-primary btn-lg" id="defaultTag" style="border-radius: 20px; ">#大使館へ行く</button>
    </div>


  <div style="margin: 300px 0;">テスト</div>
</div>


@endsection
