<section class="panel">
	<header class="panel-heading">
	  Contact
	</header>
	<div class="panel-body">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary btn-lg pull-right" data-toggle="modal" data-target="#addContactSlider">
		 Add Contact Slider
		</button>
         
		<!-- Button trigger modal -->
		<div class="adv-table editable-table ">
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th>#</th>
							<th>Contact Slider</th>
							<th>Slider Title</th>
							<th>Slider Tagline </th>
							<th>Contact Description </th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>{{--*/$i=1;/*--}}
						@foreach($getContactSlider as $get)
						<tr class="odd gradeX">
							<td>{{$i++}}</td>
							<td>{{$get->contact_image}}</td>
							<td>{{$get->title}}</td>
							<td>{{$get->tag_line}}</td>
							<td>{{$get->description}}</td>
							<td>@if($get->status=='1')Publish @else --- @endif</td>
							<td>
								<a href="#" onclick="return confirm('Are you sure you want to delete this ?');"><span><i class="fa fa-trash-o"></i> Delete</span></a> |
								<a href="javascript:valid('0');" class="updatcontacteslider" data-id="{{$get->id}}" data-heading="{{$get->title}}" data-subheading="{{$get->tag_line}}" data-discribe={{$get->description}} data-status="{{$get->status}}" data-toggle="modal" data-target="#addContactSlider">Update </a>
							</td>
						</tr>
						@endforeach
					  
					 </tbody>
				</table>
				<div class="pull-right">
				
				</div>
		</div>
	</div>
</section>
<script>
$('.updatcontacteslider').click(function(){
		$('.contact-slider-id').val($(this).attr('data-id'));
		$('.contact-slider-heading').val($(this).attr('data-heading'));
		$('.contact-slider-subtitle').val($(this).attr('data-subheading'));
		$('.contact-slider-discribe').val($(this).attr('data-discribe'));
		//$('.slider-subtitle').val($(this).attr('data-status'));
		$('.contact-btn-update').text('Update');
});

</script>
