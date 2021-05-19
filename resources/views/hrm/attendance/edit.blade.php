@extends('layouts.master')

@section('title', 'HRM')
@section('page-title', 'HRM')
@section('card-title', 'Employee Management')

@section('content')

<div id="app">
        <div id="navbar">
<<<<<<< HEAD
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary"" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">HRM</a>
=======
		<nav class="navbar navbar-expand-lg navbar-dark bg-info" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <h5><a class="navbar-brand" href="#">HRM</a></h5>
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
<<<<<<< HEAD
          <a class="nav-link active" aria-current="page" href="/HRM" >Employee</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Attendance" >Attendance</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Payroll" >Payroll</a>
=======
          <h4><a class="nav-link active" aria-current="page" href="/HRM" >Employee</a></h4>
        </li>
        <li class="nav-item">
          <h4><a class="nav-link" href="/Attendance" >Attendance</a></h4>
        </li>
        <li class="nav-item">
          <h4><a class="nav-link" href="/Payroll" >Payroll</a></h4>
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
        </li>
    
      </ul>
    </div>
  </div>
</nav>
</div>


<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-5">Edit Attendance</h1>
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
    <form method="post" action="{{ route('Attendance.update', $attendance->id) }}">
    {{ method_field('PUT') }}
          @csrf
<<<<<<< HEAD
          <div class="form-group" class="mb-3">    
              <label for="empNameAttend">Employee Name:</label>
              <input type="text" name="empNameAttend" class="form-control" value="{{$attendance->empNameAttend }}" required/>
=======
          <div class="dropdown" class="mb-3">    
              <label for="empNameAttend">Employee Name:</label>
                  <select class="form-control" name="empNameAttend" value="{{$attendance->empNameAttend }}">
                      @foreach ($employees as $employee)
                          <option value="{{ $employee->id}} &nbsp&nbsp {{$employee ->name}}">{{$employee ->name}}</option>
                      @endforeach 
                  </select>
             
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
          </div>

          <div class="form-group" class="mb-3">
              <label for="startTime">Start Time</label>
              <input type="datetime-local"  name="startTime" class="form-control" value="{{$attendance->startTime }}" />
          </div>

          
          <div class="form-group">
                <label for="endTime">End Time</label>
                <input type="datetime-local" class="form-control" name="endTime" value="{{$attendance->endTime }}" />
            </div>
            

          <br />
          <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
</div>

@endsection