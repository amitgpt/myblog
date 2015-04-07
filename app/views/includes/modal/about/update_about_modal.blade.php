<!-- Modal -->
<div class="modal fade" id="updateAbout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title" id="myModalLabel">About Update</h2>
      </div>
      <div class="modal-body">
		  <div class="error"></div>
		  <form  action="/admin/updateabout" method="post" enctype="multipart/form-data">
			  <input type="hidden" name="aboutid" class="about-id">
			<div class="form-group">
				<label><b>About Image</b></label>
				<input type="file"  name="aboutimage">
			</div>
			<div class="form-group">
				<textarea class="form-control about-title" placeholder="Title" autofocus name="title"></textarea>
			</div>
			<div class="form-group">
				<textarea class="form-control about-tagline" placeholder="Tag Line" autofocus name="tagline"></textarea>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-update">update</button>
      </div>
      </form>
    </div>
  </div>
</div>

