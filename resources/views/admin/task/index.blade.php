@extends('layouts.admin')
@section('title','Todo一覧')

@section('content')
<div class="main">
  <div class="row">
    <div class="col-3  mx-aut">
      <div class="left-title-box my-4 mx-5">
        <p><a class="AddTitleModal" data-toggle="modal" data-target="#titleModal">+ タイトル追加</a></p>

        {{-- 左側のタイトル追加モーダル --}}
        @include('components.AddTitleModal')

        <ul class="list-group">
          @foreach($titles as $title)
          <div class="titleLoop section">
            <a href="{{ route('admin.task', ['id' => $title->id]) }}" class="list-group-item border-0 bg-light title" style="display: inline-block">
              {{ $title->title }}</a>
              
            <img class="titleIcon" src="{{ asset('image/deleteIcon.jpeg') }}" alt="delete" style="float: right; margin-left: 10px; margin-top: 12px;" data-toggle="modal" data-target="#deleteModal{{$title->id}}">
              
              {{-- 左側の削除アイコンモーダル --}}
              @include('components.DeleteTitleModal', ['title' => $title])

            <img class="titleIcon editModal" src="{{ asset('image/editIcon.jpeg') }}" alt="edit" style="float: right; margin-top: 12px;" data-toggle="modal" data-target="#editTitleModal" data-title="{{$title->title}}" data-id_title="{{ $title->id }}"> 

              {{-- 左側の更新アイコンモーダル --}}
              @include('components.UpdateTitleModal')

          @endforeach
        </ul>
      </div>
    </div>
    
    {{-- 右側 --}}
    <div class="col-9 mx-auto bg-white">
      <div class="right-title-box my-4 mx-5">
          <p>Todoタイトルを選択してください。</p>
      </div>
    </div>
  </div>
</div>

{{-- モータルへデータを送るjavascript --}}
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

$(document).ready(function () {
  console.log('titleModal', $('#titleModal'));
  if ($('.addTitleAlert').length) {
    // console.log('titleModal', $('#titleModal'));
    $('#titleModal').show();
  }
});    
</script>
  
@endsection