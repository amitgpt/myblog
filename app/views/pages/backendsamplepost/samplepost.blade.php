{{--*/echo Request::segment(2);/*--}}
<section class="panel">
	<header class="panel-heading">
	Sampale Post
	</header>
	<div class="panel-body">
		<!--Button trigger modal -->
		<button type="button" class="btn btn-primary btn-lg pull-right" data-toggle="modal" data-target="#add_update_post">
		 Add Post
		</button>
		
		<!-- Button trigger modal -->
		<div class="adv-table editable-table ">
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th>#</th>
							<th>Post Title</th>
							<th>Post Tagline</th>
							<th>PostBy</th>
							<th>Content</th>
							<th>Created data</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						{{--*/$i=1;/*--}}
						@foreach($getSamplePost as $get)
						<tr class="odd gradeX">
							<td>{{$i++}}</td>
							<td>{{$get->title}}</td>
							<td>{{$get->tag_line}}</td>
							<td>{{$get->postedby}}</td>
							<td>{{$get->blogcontant}}</td>
							<td>{{--*/
									$createsDate=$get->created_at;
									$createsDate=explode(" ", $createsDate);
									$createsDate=$createsDate[0];
									$createsDate= date('F j,Y',strtotime($createsDate));
								/*--}} {{$createsDate}}
							</td>
							<td>@if($get->status==1)Publish @else ---- @endif</td>
							<td>
								<a href="#" onclick="return confirm('Are you sure you want to delete this ?');"><span><i class="fa fa-trash-o"></i> Delete</span></a> |
								<a href="javascript:valid('0');" data-toggle="modal" data-target="#add_update_post" class="update">Update </a>
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
