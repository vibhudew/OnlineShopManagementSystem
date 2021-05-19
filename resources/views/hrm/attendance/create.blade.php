@extends('layouts.master')

@section('title', 'HRM')
@section('page-title', 'HRM')
@section('card-title', 'Employee Management')

@section('content')

<div id="app">
        <div id="navbar">
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary"" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">HRM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/HRM" >Employee</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Attendance" >Attendance</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Payroll" >Payroll</a>
        </li>
    
      </ul>
    </div>
  </div>
</nav>
</div>


<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-5">Add Attendance</h1>
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
      <form method="post" action="{{ route('Attendance.store') }}">
          @csrf
          <div class="form-group" class="mb-3">    
              <label for="empNameAttend">Employee Name:</label>
              <input type="text" class="form-control" name="empNameAttend"/>
          </div>

          <div class="form-group" class="mb-3">
              <label for="startTime">Start Time</label>
              <input type="datetime-local" class="form-control" name="startTime"/>
          </div>

          
          <div class="form-group">
                <label for="endTime">End Time</label>
                <input type="datetime-local" class="form-control" name="endTime"  />
            </div>
            

          <br />
          <button type="submit" class="btn btn-primary">Create</button>
      </form>
  </div>
</div>
</div>

@endsection