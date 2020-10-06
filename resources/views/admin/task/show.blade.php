@extends('layouts.admin')
@section('title','Todo一覧')

@section('content')
<div class="main">
  <div class="row">
    <div class="col-3  mx-aut">
      <div class="left-title-box my-4 mx-5">
        <p><a href="{{ route('admin.task.add') }}">+ タイトル追加</a></p>


        <!-- {{-- 左側のタイトル追加モーダル --}}
        {{-- @include('components.AddTitleModal') --}} -->

        <ul class="list-group">
          @foreach($titles as $title)
          <div class="titleLoop section">
            <a href="{{ route('admin.task', ['id' => $title->id]) }}" class="list-group-item border-0 title" style="display: inline-block">
              {{ $title->title }}</a>
              
            <img class="titleIcon" src="{{ asset('image/deleteIcon.jpeg') }}" alt="delete" style="float: right; margin-left: 10px; margin-top: 12px;" data-toggle="modal" data-target="#deleteModal{{$title->id}}">
              
              {{-- 左側の削除アイコンモーダル --}}
              @include('components.DeleteTitleModal', ['title' => $title])

            <a href="{{ route('admin.task.edit', ['id' => $title->id]) }}"><img class="titleIcon editModal" src="{{ asset('image/editIcon.jpeg') }}" alt="edit" style="float: right; margin-top: 12px;" data-title="{{$title->title}}" data-id_title="{{ $title->id }}"></a>

            <!-- {{-- 左側の更新アイコンモーダル --}} -->
            <!-- {{-- @include('components.UpdateTitleModal') --}}   -->

          @endforeach
        </ul>
      </div>
    </div>
    
    {{-- 右側 --}}
    <div class="col-9 mx-auto bg-white">
      <div class="right-title-box my-4 mx-5">
        <p class="test">見出し</p>

          <ul class="list-group">
              @foreach($currentTitle->contents as $content)
                <li><a class="list-group-item headingIndex heading_modal ml-2" data-toggle="modal" data-target="#myModal" data-heading="{{$content->heading}}" data-body="{{$content->body}}" data-id="{{ $content->id }}" >{{$content->heading}}
              </a></li>
                {{-- 右側の見出しクリック編集モーダル --}}
                @include('components.UpdateContentModal')

              @endforeach
          </ul>


        <a href="{{ route('admin.task.addheading', ['id' => $currentTitle->id]) }}" type="button" class="btn btn-primary mt-3 text-white">追加</a>
        
        <!-- {{-- 右側の見出し追加モーダル --}} -->
        <!-- {{-- @include('components.AddContentModal') --}} -->

      </div>
    </div>
  </div>
</div>

{{-- モータルへデータを送るjavascript --}}
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>

$('.heading_modal').on('click', function() {

  var heading = $(this).data('heading');

  var body = $(this).data('body');


  $('#inputHeading_modal').val(heading);

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
  console.log('edit', $('.editTitleAlert').length);
  console.log('add', $('.addTitleAlert').length);
  if ($('.addTitleAlert').length) {
    $('#titleModal').modal('show');
  } 
}); 

$(document).ready(function () {
  if ($('.editTitleAlert').length) {
    $('#editTitleModal').modal('show');
  } 
}); 

$(document).ready(function () {
  if ($('.updateContetnAlert').length) {
    $('#myModal').modal('show');
  } 
}); 

$(document).ready(function () {
  if ($('.addContentAlert').length) {
    $('#addHeadingModal').modal('show');
  } 
}); 


</script>

@endsection