<!-- Modal -->
<div class="modal fade" id="add_update_post" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title" id="myModalLabel">Sample Post</h2>
      </div>
      <div class="modal-body">
		  <div class="error"></div>
		  <form>
			  <input type="hidden" name="aboutid" class="about-id">
			
			<div class="form-group">
				<textarea class="form-control " placeholder="Title" autofocus name="title"></textarea>
			</div>
			<div class="form-group">
				<textarea class="form-control " placeholder="Tag Line" autofocus name="tagline"></textarea>
			</div>
			<div class="form-group">
				<label><h5>Blog Content</h5></label>
				 <textarea  name="editor1"></textarea>
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

 <script>
            CKEDITOR.replace( 'editor1' );
 </script>
