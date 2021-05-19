@extends('layouts.master')

@section('title', 'HRM')
@section('page-title', 'HRM')
@section('card-title', 'Employee Management')

@section('content')

<div id="app">
        <div id="navbar">
		<nav class="navbar navbar-expand-lg navbar-dark bg-info" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <h5><a class="navbar-brand" href="#">HRM</a></h5>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <h4><a class="nav-link active" aria-current="page" href="/HRM" >Employee</a></h4>
        </li>
        <li class="nav-item">
          <h4><a class="nav-link" href="/Attendance" >Attendance</a></h4>
        </li>
        <li class="nav-item">
          <h4><a class="nav-link" href="/Payroll" >Payroll</a></h4>
        </li>
    
      </ul>
    </div>
  </div>
</nav>
</div>

<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1>Edit a Employee</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <form method="post" action="{{ route('HRM.update', $employee->id) }}">
    {{ method_field('PUT') }}
          @csrf
          <div class="form-group" class="mb-3">    
              <label for="name">Full Name:</label>
              <input type="text" class="form-control" name="name" value="{{$employee->name }}" required/>
          </div>
              
          <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" name="address" value="{{ $employee->address }}" required  />
            </div>
            <div class="form-group">
                <label for="nic">NIC:</label>
                <input type="text" class="form-control" name="nic" value="{{ $employee->nic }}" required/>
            </div>
           
            <div class="form-group">
                <label for="mobile">Mobile No:</label>
                <input type="tel" class="form-control" name="mobile" value="{{ $employee->mobile }}" required   />
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" value="{{ $employee->email }}" required />
            </div>


          <br />
          <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
</div>

@endsection