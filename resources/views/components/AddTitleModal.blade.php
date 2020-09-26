<!-- 左側のタイトル追加Modal -->
<div id="titleModal" class="modal fade" role="dialog">
<div class="modal-dialog">             
  <!-- Modal content-->
  <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title"></h4>
    </div>
    <div class="modal-body">
      <h4 class="text-center">タイトル追加</h4>
      
      @if (count($errors) > 0)
        <p class="validateAlert addTitleAlert">{{$errors->first('title')}}</p>
      @endif

      <form action="{{ action('TaskController@create') }}" method="post">
        <div class="form-group">
          <input id="title" type="text" name="title" class="form-control">
        </div>
        @csrf
        <div class="text-center">
          <button type="submit" class="btn btn-primary">追加</button>
        </div>
      </form>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
    </div>
  </div>             
</div>
</div>