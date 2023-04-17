@extends('layout.master')

@section('content')

<form id="myForm" method="POST"  action="{{route('project.update',$project->id)}}" enctype="multipart/form-data">
@method('PUT')
@csrf
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="name">Group Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="group_name" value="{{$project->group_name}}" readonly>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="fName">Project Title</label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="group_name" value="{{$project->title}}" readonly>
                  </div>
                  @if(session('name')  == 'admin' ||session('name')  == 'faculty')
                  <div class="col-md-4 form-group">
                            <label>Status</label>
                            <select class="custom-select" name="status">
                                <option selected> ---status---</option>
                                <option value="1">Accepted</option>
                                <option value="0">Rejected</option>
                            </select>
                        </div>
                @endif
                <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary btn-sm" name="">Save</button>
                </div>
              </div> 
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="adress">Description</label>
                    <p>{{$project->description}}</p>
                  </div>
              </div>
            </form>


@endsection