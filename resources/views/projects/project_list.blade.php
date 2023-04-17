@extends('layout.master')
@section('content')

<div class="row">
			<div class="col-lg-12">
				<div class="card">
				  <div class="card-header">
					<h3 class="card-title">All </h3>
				  </div>
					<!-- /.card-header -->
					<div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
						  <thead>
						  <tr>
                <th width="7%">Serial</th>
                <th>Group Name</th>
                <th>Project Title</th>
                <th>Status</th>
                <th width="17%">Action</th>
						  </tr>
						  </thead>
						  <tbody>
							@foreach($projects as $project)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$project->group_name}}</td>
									<td>{{$project->title}}</td>
									<td>                                
                                    @if($project->status ==1)
                                    <span class="badge light ">
                                        <i class="fa fa-circle text-success me-1"></i>
                                        Accepted
                                    </span>
                                    @elseif($project->status ==3)
                                    <span class="badge light ">
                                        Pending
                                    </span>
                                    @else
                                    <span class="badge light ">
                                        <i class="fa fa-circle text-danger me-1"></i>
                                        Rejected
                                    </span>
                                    @endif
                                </td>
									<td>
                  				<div class="d-flex">
									<a href="{{route('project.edit', $project->id)}}" class="btn btn-primary">Show</a>
								</div>
                  					</td>
								</tr>
							@endforeach
						  </tbody>
						</table>
            
					</div>	 
				</div>
			</div>
		</div>


@endsection