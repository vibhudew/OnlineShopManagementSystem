@extends('layouts.master')
@section('title', 'Contact page')
@section('page-title', 'Contact management')
@section('card-title', 'Add Contact')




@section('content')


@foreach($errors->all() as $error)

<div class="alert alert-danger" role="alert">
{{$error}}

</div>

@endforeach

<form method="post" action="/saveContact">
{{csrf_field()}}

<div class="row">
  <div class="form-group col-md-4">
    <label >Business id:</label>
    <input type="text" class="form-control"  name="Business_id" placeholder="Enter your Business id"value="{{$contactdata->Business_id}}">
  </div>
  <div class="form-group col-md-4">
    <label>Business Name :</label>
    <input type="text" class="form-control"   name="Business_name" placeholder="Enter your Business Name"value="{{$contactdata->Business_name}}">
  </div>
  <div class="form-group col-md-4">
  <label>Type:</label>
  <input class="form-control" list="UnitList" name="Type" placeholder="Type to search..."value="{{$contactdata->Type}}">
  <datalist id="UnitList">
      <option value="Both">
      <option value="Supplier">
      <option value="Customer">
  </datalist>
  </div>
</div>

  <div class="row">
  <div class="form-group col-md-6">
    <label >First Name:</label>
    <input type="text" class="form-control"  name="First_name" placeholder="Enter your First Name"value="{{$contactdata->First_name}}">
  </div>
  <div class="form-group col-md-6">
    <label>Last Name :</label>
    <input type="text" class="form-control"   name="Last_name" placeholder="Enter your Last Name"value="{{$contactdata->Last_name}}">
  </div>
</div>

<div class="row">
  <div class="form-group col-md-6">
    <label >Email</label>
    <input type="text" class="form-control"  name="Email" placeholder="Enter your Email"value="{{$contactdata->Email}}">
  </div>
  <div class="form-group col-md-6">
    <label>Mobile:</label>
    <input type="text" class="form-control"   name="Mobile" placeholder="Enter your Mobile"value="{{$contactdata->Mobile}}">
  </div>
</div>

<div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Address</label>
                  <textarea rows="4" cols="80" class="form-control" name="Address" placeholder="Here can be your description"value="{{$contactdata->Address}}"></textarea>
                </div>
              </div>
            </div>

<input type ="submit" class="btn btn-primary" value="UPDATE">
<input type ="button" class="btn btn-primary" value="CLEAR">
</form>

@endsection
