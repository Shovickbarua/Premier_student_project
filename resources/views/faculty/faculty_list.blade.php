@extends('layout.master')

@section('content')

<div class="row">
			<div class="col-lg-12">
				<div class="card">
				  <div class="card-header">
					<h3 class="card-title">All Faculty</h3>
					<a href="" class="btn btn-success float-right btn-sm"><i class="fa fa-plus-circle"></i>Add Student</a>
				  </div>
					<!-- /.card-header -->
					<div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
						  <thead>
						  <tr>
                <th width="7%">Serial</th>
                <th>Name</th>
						  </tr>
						  </thead>
						  <tbody>
							@foreach($faculties as $faculty)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$faculty->faculty_name}}</td>
								</tr>
							@endforeach
						  </tbody>
						</table>
					</div>	 
				</div>
			</div>
		</div>


@endsection