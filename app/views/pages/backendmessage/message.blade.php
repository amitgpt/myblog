<section class="panel">
	<header class="panel-heading">
	  Message
	</header>
	<div class="panel-body">
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
							
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						{{--*/$i=1;/*--}}
						@foreach($getMessage as $get)
						<tr class="odd gradeX">
							<td>{{$i++}}</td>
							<td>{{$get->name}}</td>
							<td>{{$get->email}}</td>
							<td>{{$get->phone_number}}</td>
							<td>{{$get->message}}</td>
							<td>
								<a href="#" onclick="return confirm('Are you sure you want to delete this ?');"><span><i class="fa fa-trash-o"></i> Delete</span></a> 
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
