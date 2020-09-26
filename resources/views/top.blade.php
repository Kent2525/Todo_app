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


@endsection
