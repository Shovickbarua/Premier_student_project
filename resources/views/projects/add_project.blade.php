@extends('layout.master')

@section('content')

<form id="myForm" method="POST"  action="{{route('project.store')}}" enctype="multipart/form-data">
@csrf
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="name">Group Name<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="name" placeholder="" name="group_name">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="fName">Project Title<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="fName" placeholder="" name="title">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="adress">Description<font style="color:red">*</font></label>
                    <textarea class="form-control" id="adress" name="description" rows="2"></textarea>
                  </div>
                <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary btn-sm" name="">Save</button>
                </div>
              </div>
            </form>


@endsection