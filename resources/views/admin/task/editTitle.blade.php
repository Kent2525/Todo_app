@extends('layouts.admin')
@section('title','タイトル編集')

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
            <div class="title-loop">
              <a href="{{ route('todo.show', ['id' => $title->id]) }}" class="list-group-item border-0">
                {{ $title->title }}</a>
              <div class="title-icon-section">
                <img class="delete-icon image-sizing" src="{{ asset('image/deleteIcon.jpeg') }}" alt="delete" data-toggle="modal" data-target="#deleteModal{{$title->id}}">
                
                  {{-- 左側の削除アイコンモーダル --}}
                  @include('components.DeleteTitleModal', ['title' => $title])

                <a href="{{ route('todo.editTitle', ['id' => $title->id]) }}"><img class="edit-title image-sizing" src="{{ asset('image/editIcon.jpeg') }}" alt="edit" data-title="{{$title->title}}" data-id_title="{{ $title->id }}"></a>
              </div>
            </div>  
          @endforeach
        </ul>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal in" id="editTitleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: block; padding-left: 0px;">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
          </div>
          <div class="modal-body">
            <h4 class="text-center">タイトル変更</h4>
          
            @if (count($errors) > 0)
              <p class="editTitleAlert textAlert">{{$errors->first('title')}}</p>
            @endif
          
            <form action="{{ action('EditTitleController@edit') }}" method="post">
              <div class="form-group">
                <input id="inputModal" type="text" name="title" class="form-control" value="{{ $currentTitle->title}}">
              </div>
              @csrf
              <input id="inputIdTitle" type="hidden" name="id" value="{{ $currentTitle->id}}">
              <div class="text-center">
                <button type="submit" class="btn btn-primary">変更</button>
              </div>
            </form>
          </div>
          <div class="modal-footer">
          <a href="{{ route('todo.index') }}" type="button" class="btn btn-default">閉じる</a>
          </div>
        </div>  
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

<!-- Latest compiled and minified JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
$(window).on('load',function(){
  $('#editTitleModal').modal('show');
});

$('.editModal').on('click', function() {
  var title = $(this).data('title');
  $('#inputModal').val(title);

  var id_title = $(this).data('id_title');
  $('#inputIdTitle').val(id_title);
});

function clickBg1() {
  location.href = "/todo";
}

$(document).on('click', function(e) {
  // e.preventDefault();
  // e.stopPropagation();
  console.log("test", $(e.target));
  if ($(e.target).hasClass('modal')) {
    location.href = "/todo";

  }
});

</script>



@endsection