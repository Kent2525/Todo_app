@extends('layouts.admin')
@section('title','Todo一覧')

@section('content')
<div class="main">
  <div class="row">
    <div class="col-5 col-md-4">
      <div class="left-title-box my-4">
        <div class=text-center>
          <p><a href="{{ route('todo.addTitle') }}" class="addTitleButton"><i class="fas fa-plus-circle plusAwesome"></i> タイトル追加</a></p>
        </div>
        <ul class="list-group">
          @foreach($titles as $title)
          <div class="title-loop" style="display: flex;">
            <a href="{{ route('todo.show', ['id' => $title->id]) }}" class="list-group-item border-0 todo-title">
              {{ $title->title }}</a>
            
            <div class="title-icon-section">
              <img class="image-sizing delete-icon" src="{{ asset('image/deleteIcon.jpeg') }}" alt="delete" data-toggle="modal" data-target="#deleteModal{{$title->id}}">
                
                {{-- 左側の削除アイコンモーダル --}}
                @include('components.DeleteTitleModal')

              <a href="{{ route('todo.editTitle', ['id' => $title->id]) }}"><img class="image-sizing edit-title" src="{{ asset('image/editIcon.jpeg') }}" alt="edit" data-title="{{$title->title}}" data-id_title="{{ $title->id }}"></a>
            </div>
          </div>  
          @endforeach
        </ul>
      </div>
    </div>
    
    {{-- 右側 --}}
    <div class="col-7 col-md-8 mx-auto bg-white">
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

$('.edit-title').on('click', function() {
      var title = $(this).data('title');
      $('#inputModal').val(title);

      var id_title = $(this).data('id_title');
      $('#inputIdTitle').val(id_title);
});

// $(document).ready(function () {
//   console.log('edit', $('.editTitleAlert').length);
//   console.log('add', $('.addTitleAlert').length);
//   if ($('.addTitleAlert').length) {
//     $('#titleModal').modal('show');
//   } 
// }); 

$(document).ready(function () {
  if ($('.editTitleAlert').length) {
    $('#editTitleModal').modal('show');
  } 
}); 



</script>
  
@endsection