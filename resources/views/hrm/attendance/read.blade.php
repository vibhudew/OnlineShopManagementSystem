@extends('layouts.master')

@section('title', 'HRM')
@section('page-title', 'HRM')
@section('card-title', 'Attendance Management')

@section('content')

<div id="app">
        <div id="navbar">
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background-color: #e3f2fd;">
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

<div class="container">
<div class="row">
<div class="col-sm-12">
    <br>
    <h1>All Attendances</h1> 

    <div>
    <a style="margin: 19px;" href="{{ route('Attendance.create')}}" class="btn btn-primary btn-lg">Add Attendance</a>
    </div>  

    <div class="col-sm-12">

        @if(session()->get('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}  
          </div>
        @endif
    </div>  

  <table class="table table-striped">
    <thead >
        <tr>
          <td >ID</td>
          <td >Employee Name </td>
          <td >Start Time </td>
          <td >End Time </td>
          <td colspan = 2>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($attendances as $attendance)
        <tr>
            <td>{{ $attendance->id}}</td>
            <td>{{ $attendance->empNameAttend}}</td>
            <td>{{ $attendance->startTime}}</td>
            <td>{{ $attendance->endTime}}</td>
            
            <td>
                <a href="{{ route('Attendance.edit',$attendance->id)}}" class="btn btn-success">Edit</a>
               
            </td>
            <td>
                <form action="{{ route('Attendance.destroy', $attendance->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-warning" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
</div>

@endsection