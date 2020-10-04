{{-- 右側の見出しクリックModal --}}
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog"> 
    {{-- Modal content--}}
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <div class="contentTitleBox text-center">
          <h4 class="text-center" style="display: inline-block;">{{$currentTitle->title}}</h4>
          <a href="{{ action('ContentController@delete', ['id' => $content->id]) }}"  class="btn btn-danger text-right" style="float: right";>削除</a>
        </div>

        @if (count($errors) > 0)
          <p class="validateAlert updateContetnAlert">{{$errors->first('heading')}}</p>
        @endif
        
        <form action="{{ action('ContentController@update') }}" method="post">
          <div class="form-group">
            <label for="inputHeading_modal">見出し</label>
            <input id="inputHeading_modal" type="text" name="heading" class="form-control">
          </div>
          <div class="form-group">
            <label for="inputBody_modal">メモ</label>
            <textarea id="inputBody_modal" type="text" name="body" class="form-control" row="5"></textarea>
          </div>
          @csrf
          <input type="hidden" id="modal_id" name="id" value="">
          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block mt-4">更  新</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
      </div>
    </div>             
  </div>
</div>