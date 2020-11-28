<div id="confirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                  <h4 align="center" style="margin:0;">Apakah anda yakin akan menghapus data ini?</h4>
                </div>
                <form method="post" id="deleted" class="form-horizontal" enctype="multipart/form-data">
                   @method('DELETE')
                  @csrf
                    <input type="hidden" name="iddel" id="iddel">
                    <input type="hidden" name="idurl" id="idurl">
                  <div class="form-group" align="center">
                  <button type="submit" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                  </div>
              </form>
            </div>
        </div>
    </div>
</div>