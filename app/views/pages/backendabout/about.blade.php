<section class="panel">
	<header class="panel-heading">
	About
	</header>
	<div class="panel-body">
		<!-- Button trigger modal -->
		<!--button type="button" class="btn btn-primary btn-lg pull-right" data-toggle="modal" data-target="#addSlider">
		  Launch demo modal
		</button-->
		
		<!-- Button trigger modal -->
		<div class="adv-table editable-table ">
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th>#</th>
							<th>About Image</th>
							<th>Title</th>
							<th>Tag Line</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						{{--*/$i=1;/*--}}
						@foreach($getAbout as $get)
						<tr class="odd gradeX">
							<td>{{$i++}}</td>
							<td>{{$get->about_image}}</td>
							<td>{{$get->title}}</td>
							<td>{{$get->tag_line}}</td>
							<td>@if($get->status)Publish @else ---- @endif</td>
							<td>
								<a href="#" onclick="return confirm('Are you sure you want to delete this ?');"><span><i class="fa fa-trash-o"></i> Delete</span></a> |
								<a href="javascript:valid('0');" data-id="{{$get->id}}" data-title="{{$get->title}}" data-tagline="{{$get->tag_line}}" data-toggle="modal" data-target="#updateAbout" class="update">Update </a>
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
$('.update').click(function(){
	
		$('.about-id').val($(this).attr('data-id'));
		$('.about-title').val($(this).attr('data-title'));
		$('.about-tagline').val($(this).attr('data-tagline'));
});

</script>
