            <!-- Modal -->
            <div id="editTitleModal" class="modal fade" role="dialog">
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
                    <form action="/admin/title/" method="POST">
                      @method('PUT')
                      @csrf
                      <div class="form-group">
                        <label for="title">タイトル</label>
                        <input id="title" type="text" class="form-control" name="title" value="{{ old('heading') }}">
                        <input type="hidden" name="titleid" id="titleid">
                      </div>
                      <div class="text-center">
                       <button type="submit" class="btn btn-primary">更新</button>
                    </form>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                  </div>
                </div>             
              </div>
          </div>
