@extends('layouts.admin')
@section('title','Todo一覧')

@section('content')

<h3 class="mt-5 text-center">仮トップページ</h3>
<div class="text-center my-3">
  <a class="btn btn-primary" href="/admin/task">管理画面</a>
</div>

<div class="text-center" style="margin : 0 auto">
  <img src="{{ asset('image/welcomeTop.jpg') }}" style="width: 85%;" alt="welcome Top">
</div>
<h3 class="text-center" style="margin: 100px;">帰国時の予定を建てましょう</h3>
<div class="text-center">
  <button class="btn btn_tag btn-primary" style="border-radius: 20px;">#家族と会う</button>
  <button class="btn btn_tag btn-primary" style="border-radius: 20px;">#買い物に行く</button>
  <button class="btn btn_tag btn-primary" style="border-radius: 20px;">#お土産を買う</button>
  <button class="btn btn_tag btn-primary" style="border-radius: 20px;">#日本食を食べる</button>
</div>

<div style="margin: 300px 0;">テスト</div>

@endsection
