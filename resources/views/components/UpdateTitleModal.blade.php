<div id="editTitleModal" class="modal fade" role="dialog">
  <div class="modal-dialog">          
    {{-- Modal content--}}
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <h4 class="text-center">タイトル変更</h4>
        
        @if (count($errors) > 0)
          <p class="validateAlert editTitleAlert">{{$errors->first('title1')}}</p>
        @endif
        
        <form action="{{ action('UpdateTitleController@update') }}" method="post">
          <div class="form-group">
            <input id="inputModal" type="text" name="title1" class="form-control" value="">
          </div>
          @csrf
          <input id="inputIdTitle" type="hidden" name="id" value="">
          <div class="text-center">
            <button type="submit" class="btn btn-primary">変更</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
      </div>
    </div>             
  </div>         
</div>