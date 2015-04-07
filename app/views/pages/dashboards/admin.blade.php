<section class="panel">
	<header class="panel-heading">
	  Manage Slider And Logo Titale
	</header>
	<div class="panel-body">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary btn-lg pull-right" data-toggle="modal" data-target="#addSlider">
		  Launch demo modal
		</button>
		
		<!-- Button trigger modal -->
		<div class="adv-table editable-table ">
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th>#</th>
							<th>Logo Title</th>
							<th>Slider</th>
							<th>Slider Heading 1</th>
							<th>Slider Sub Heading </th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						
						@foreach($getLogoSlidet as $get)
						<tr class="odd gradeX">
							<td>{{$get->id}}</td>
							<td>{{$get->logotitle }}</td>
							<td><image height="100px" width="200px">{{$get->slider_image}}</image></td>
							<td>{{$get->slider_heading}}</td>
							<td>{{$get->slider_sub_heading}}</td>
							<td>@if($get->status=='1')Publish @else --- @endif</td>
							<td>
								<a href="#" onclick="return confirm('Are you sure you want to delete this ?');"><span><button class="btn btn-danger delete" type="button"><i class="glyphicon glyphicon-trash"></i><span>Delete</span></button></span></a> |
								<a href="javascript:valid('0');" class="updateslider" data-id="{{$get->id}}" data-logotitle="{{$get->logotitle}}" data-heading="{{$get->slider_heading}}" data-subheading="{{$get->slider_sub_heading}}" data-status="{{$get->status}}" data-toggle="modal" data-target="#addSlider"><button class="btn btn-info " type="button"><i class="fa fa-refresh"></i> Update</button> </a>
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
$('.updateslider').click(function(){
		$('.slider-id').val($(this).attr('data-id'));
		$('.logo-title').val($(this).attr('data-logotitle'));
		$('.slider-heading').val($(this).attr('data-heading'));
		$('.slider-subtitle').val($(this).attr('data-subheading'));
		//$('.slider-subtitle').val($(this).attr('data-status'));
		$('.btn-update').text('Update');
});

</script>
