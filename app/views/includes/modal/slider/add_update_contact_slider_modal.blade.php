<!-- Modal -->
<div class="modal fade" id="addContactSlider" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">New Contact Slider Add</h2>
      </div>
      <div class="modal-body">
		   @if ($errors->has())
			<div class="alert alert-danger">
				@foreach ($errors->all() as $error)
					{{ $error }}<br>        
				@endforeach
			</div>
        @endif
		  <form  action="/admin/contact/addupdate" method="post" enctype="multipart/form-data">
			  <input type="hidden" name="contactsliderId" class="contact-slider-id">
			
			<div class="form-group">
				<label><b>Slider Image</b></label>
				<input type="file"  name="contactsliderimage">
			</div>
			<div class="form-group">
				<textarea class="form-control contact-slider-heading" placeholder="Contact Slider  Heading" autofocus name="contactsliderheading" value="{{Input::old('contactsliderheading')}}"></textarea>
			</div>
			<div class="form-group">
				<textarea class="form-control contact-slider-subtitle" placeholder="Contact Slider Sub Heading" autofocus name="contactslidersubheading" value="{{Input::old('contactslidersubheading')}}"></textarea>
			</div>
			<div class="form-group">
				<textarea class="form-control contact-slider-discribe" placeholder="Description" autofocus name="contactdescription" value="{{Input::old('contactdescription')}}"></textarea>
			</div>
			<div class="form-group">
				<input type="checkbox" name="status" class="slider-status">Publish
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary contact-btn-update" id="slideradd">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>

