@extends('layout.master')

@section('content')

<form id="myForm" method="POST"  action="{{route('faculty.store')}}" enctype="multipart/form-data">
@csrf
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="name">Name<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="faculty_name">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="fName">Fathers Name<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="fName" placeholder="Father's Name" name="fName">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="mName">Mothers Name<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="mName" placeholder="Mother's Name" name="mName">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="email">Email<font style="color:red">*</font></label>
                    <input type="email" class="form-control" id="email" placeholder="email" name="email">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="pNum">Mobile<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="mobile" name="mobile">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="adress">Address<font style="color:red">*</font></label>
                    <textarea class="form-control" id="adress" name="address" rows="2"></textarea>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="gender">Select Gender<font style="color:red">*</font></label>
                    <select name="gender" id="gender" class="form-control">
                        <option value="">--Select Gender--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="dob">Date Of Birth<font style="color:red">*</font></label>
                    <input type="date" class="form-control singledatepicker" id="dob" name="dob" autocomplete="off">
                  </div>
                <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary btn-sm" name="">Save</button>
                </div>
              </div>
            </form>


@endsection