@extends('layout.master')

@section('content')

<div class="row">
			<div class="col-lg-12">
				<div class="card">
				  <div class="card-header">
					<h3 class="card-title">All Students</h3>
					<a href="add_student.php" class="btn btn-success float-right btn-sm"><i class="fa fa-plus-circle"></i>Add Student</a>
				  </div>
					<!-- /.card-header -->
					<div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
						  <thead>
						  <tr>
                <th width="7%">Serial</th>
                <th>Name</th>
                <th>ID No</th>
						  </tr>
						  </thead>
						  <tbody>
							@foreach($students as $student)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$student->stuName}}</td>
									<td>{{$student->stu_id}}</td>
								</tr>
							@endforeach
						  </tbody>
						</table>
					</div>	 
				</div>
			</div>
		</div>


@endsection