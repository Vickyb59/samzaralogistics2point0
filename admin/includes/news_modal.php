<!-- Description -->
<div class="modal fade" id="details">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="name"></span></b></h4>
            </div>
            <div class="modal-body">
                <p id="desc"></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New News</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="news_add.php" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="title" class="col-sm-1 control-label">Title</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="title" name="title" required>
                  </div>

                  <label for="posted" class="col-sm-1 control-label">Date Posted</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="posted" placeholder="15 March 2019" name="posted" required>
                  </div>



                </div>
                <div class="form-group">

                  
                  <label for="photo" class="col-sm-1 control-label">Photo</label>

                  <div class="col-sm-5">
                    <input type="file" id="photo" name="photo">
                  </div>
                </div>
                <p><b>Details</b></p>
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea id="editor1" name="details" rows="10" cols="80" required></textarea>
                  </div>
                  
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit News</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="news_edit.php">
                <input type="hidden" class="nid" name="id">
                <div class="form-group">
                  <label for="edit_title" class="col-sm-1 control-label">Title</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="edit_title" name="title">
                  </div>

                  <label for="edit_posted" class="col-sm-1 control-label">Date Posted</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="edit_posted" placeholder="15 March 2019" name="posted" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="edit_short_title" class="col-sm-1 control-label">Short title</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="edit_short_title" placeholder="The First News" name="short_title" required>
                  </div>

                  <label for="edit_short_details" class="col-sm-1 control-label">Short details</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="edit_short_details" placeholder="Details not more than 300 characters" name="short_details" required>
                  </div>
                </div>

                <p><b>Details</b></p>
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea id="editor2" name="details" rows="10" cols="80"></textarea>
                  </div>
                  
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="name"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="news_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="nid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">News Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="news_delete.php">
                <input type="hidden" class="nid" name="id">
                <div class="text-center">
                    <p>DELETE News</p>
                    <h3 class="bold title"></h3>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>