<!-- Modal -->
<div class="modal fade" id="addSlider" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">New Slider Add</h4>
      </div>
      <div class="modal-body">
		  <div class="error"></div>
		  <form id="sliderAddUpdate" action="/slider/addslider" method="post" enctype="multipart/form-data">
			  <input type="hidden" name="sliderId" class="slider-id">
			<div class="form-group">
				<input type="text" class="form-control logo-title" placeholder="Logo Title" autofocus name="logotitle" value="{{Input::old('logotitle')}}">
			</div>
			<div class="form-group">
				<label><b>Slider Image</b></label>
				<input type="file"  name="sliderimage">
			</div>
			<div class="form-group">
				<textarea class="form-control slider-heading" placeholder="Slider  Heading" autofocus name="sliderheading" value="{{Input::old('sliderheading')}}"></textarea>
			</div>
			<div class="form-group">
				<textarea class="form-control slider-subtitle" placeholder="Slider Sub Heading" autofocus name="slidersubheading" value="{{Input::old('slidersubheading')}}"></textarea>
			</div>
			<div class="form-group">
				<input type="checkbox" name="status" class="slider-status">Publish
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-update" id="slideradd">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>

