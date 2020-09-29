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
  <div style="margin: 300px 0;">テスト</div>
</div>


@endsection
