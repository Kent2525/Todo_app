@extends('layouts.admin')
@section('title','Todo一覧')

@section('content')
<div class="main">
  <div class="left-col">
    <div class="left-title-box my-4">
      <div class=text-center>
        <p><a href="{{ route('todo.addTitle') }}" class="addTitleButton"><i class="fas fa-plus-circle plusAwesome"></i> タイトル追加</a></p>
      </div>
      <ul class="list-group">
        @foreach($titles as $title)
          <div class="title-loop">
            <a href="{{ route('todo.show', ['id' => $title->id]) }}" class="list-group-item border-0">
              {{ $title->title }}</a>
            <div class="title-icon-section">  
              <img class="delete-icon image-sizing" src="{{ asset('image/deleteIcon.jpeg') }}" alt="delete" data-toggle="modal" data-target="#deleteModal{{$title->id}}">
              
                {{-- 左側の削除アイコンモーダル --}}
                @include('components.DeleteTitleModal')

              <a href="{{ route('todo.editTitle', ['id' => $title->id]) }}"><img class="edit-title image-sizing" src="{{ asset('image/editIcon.jpeg') }}" alt="edit" data-title="{{$title->title}}" data-id_title="{{ $title->id }}"></a>
            </div>
          </div>              
        @endforeach
      </ul>
    </div>
  </div>
  
  {{-- 右側 --}}
  <div class="right-col bg-white">
    <div class="right-title-box my-4">
      <p class="test">見出し</p>

        <ul class="list-group">
            @foreach($currentTitle->contents as $content)
              <li><a class="list-group-item headingIndex heading_modal" data-toggle="modal" data-target="#myModal{{$content->id}}" data-heading="{{$content->heading}}" data-body="{{$content->body}}" data-id="{{ $content->id }}" >{{$content->heading}}
            </a></li>
              {{-- 右側の見出しクリック編集モーダル --}}
              @include('components.UpdateContentModal')

            @endforeach
        </ul>
      <a href="{{ route('todo.addContent', ['id' => $currentTitle->id]) }}" type="button" class="btn btn-primary mt-3 text-white">追加</a>

    </div>
  </div>

</div>

{{-- モータルへデータを送るjavascript --}}
<script>
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

// $(document).ready(function () {
//   if ($('.updateContentAlert').length) {
//     $('#myModal').modal('show');
//   } 
// }); 

$(document).ready(function () {
  if ($('.addContentAlert').length) {
    $('#addHeadingModal').modal('show');
  } 
}); 


</script>

@endsection