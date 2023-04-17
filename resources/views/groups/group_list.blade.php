@extends('layout.master')

@section('content')

<div class="row">
			<div class="col-lg-12">
				<div class="card">
				  <div class="card-header">
					<h3 class="card-title">All Member</h3>
				  </div>
					<!-- /.card-header -->
					<div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
						  <thead>
						  <tr>
                <th width="7%">Serial</th>
                <th>Student Name</th>
                <th>Id</th>
                <th>Group</th>
						  </tr>
						  </thead>
						  <tbody>
							@foreach($groups as $group)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$group->stuName}}</td>
									<td>{{$group->stu_id}}</td>
									<td>{{$group->group_name}}</td>
								</tr>
							@endforeach
						  </tbody>
						</table>
					</div>	 
				</div>
			</div>
		</div>


@endsection