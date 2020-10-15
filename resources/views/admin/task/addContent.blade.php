@extends('layouts.admin')
@section('title','タイトル追加')

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
                  @include('components.DeleteTitleModal')

                <a href="{{ route('todo.editTitle', ['id' => $title->id]) }}"><img class="edit-title image-sizing" src="{{ asset('image/editIcon.jpeg') }}" alt="edit" 
                data-title="{{$title->title}}" data-id_title="{{ $title->id }}"></a>
              </div>
            </div>
          @endforeach
        </ul>
      </div>
    </div>
    
    {{-- 右側 --}}
    <div class="col-7 col-md-8 mx-auto bg-white">
      <div class="right-title-box my-4 mx-5">
        <p class="test">見出し</p>

          <ul class="list-group">
              @foreach($currentTitle->contents as $content)
                <li><a class="list-group-item headingIndex heading_modal ml-2" data-toggle="modal" data-target="#myModal" data-heading="{{$content->heading}}" data-body="{{$content->body}}" data-id="{{ $content->id }}" >{{$content->heading}}
              </a></li>
                {{-- 右側の見出しクリックモーダル --}}
                @include('components.UpdateContentModal')

              @endforeach
          </ul>


        <a href="{{ route('todo.addContent', ['id' => $currentTitle->id]) }}" type="button" class="btn btn-primary mt-3 text-white">追加</a>
        
      </div>
    </div>
    <!-- Modal -->
    <div class="modal in" id="addHeadingModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: block; padding-left: 0px;">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <h4 class="text-center">見出し追加</h4>
        @if (count($errors) > 0)
          <p class="addContentAlert textAlert">{{$errors->first('heading')}}</p>
        @endif
        <form action="{{ action('AddContentController@create') }}"  method="post">
        <input type="hidden" name="id" value="{{$currentTitle->id}}">
          <div class="form-group">
            <input id="title" type="text" name="heading" class="form-control">
          </div>
          @csrf
          <div class="text-center">
            <button type="submit" class="btn btn-primary">追加</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <a href="{{ route('todo.show', [$currentTitle->id]) }}" type="button" class="btn btn-default">閉じる</a>
      </div>
    </div>         
      </div>
    </div>
  </div>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
$(window).on('load',function(){
  $('#addHeadingModal').modal('show');
});

$('.editModal').on('click', function() {
  var title = $(this).data('title');
  $('#inputModal').val(title);

  var id_title = $(this).data('id_title');
  $('#inputIdTitle').val(id_title);
});

$('.heading_modal').on('click', function() {
  var heading = $(this).data('heading');
  var body = $(this).data('body');
  $('#inputHeading_modal').val(heading);
  $('#inputBody_modal').val(body);

  var id = $(this).data('id');
  $('#modal_id').val(id);
});

function clickBg1() {
  location.href = "/todo";
}

$(document).on('click', function(e) {
  // e.preventDefault();
  // e.stopPropagation();
  console.log("test", $(e.target));
  if ($(e.target).hasClass('modal')) {
    location.href = "/todo/show/{{$currentTitle->id}}" 

  }
});

</script>

@endsection