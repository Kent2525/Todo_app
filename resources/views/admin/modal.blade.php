            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">             
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                  </div>
                  <div class="modal-body">
                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                    <h4 class="text-center">タイトル</h4>
                    <form action="" method="POST">
                      @csrf
                      <div class="form-group">
                        <label for="heading">見出し</label>
                        <input id="heading" type="text" class="form-control" name="heading" value="{{ old('heading') }}">
                      </div>
                      <div class="form-group">
                        <label for="ccontent">メモ</label>
                        <textarea id="content" type="text" class="form-control" row="5" name="content"></textarea>
                      </div>
                      <div class="text-center">
                      @method('PUT')
                       <button type="submit" class="btn btn-primary">更新</button>
                       <input type="hidden" value="{{$heading_posts[0]->id}}" name="title_id">
                    </form>
                    <form action="" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-primary">削除</button>
                      <input type="hidden" value="{{$heading_posts[0]->id}}" name="title_id">
                    </form>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                  </div>
                </div>             
              </div>
            </div>
