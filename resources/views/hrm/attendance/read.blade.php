@extends('layouts.master')

@section('title', 'HRM')
@section('page-title', 'HRM')
@section('card-title', 'Attendance Management')

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

<div class="container">
<div class="row">
<div class="col-sm-12">
    <br>
    <h1>All Attendances</h1> 

    <table>
<tr>
    <td>
        <form class="form-inline my-2 my-lg-0" type="get" action="{{url('/searchAttend')}}">
          <input class="form-control mr-sm-2"size="65" name="queryAttend" type="search" placeholder="Type Employee First Name to Get Atttendance Records" aria-label="Search">
          <button class="btn btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form> 
    </td>

    <td>
        <a class="btn btn-primary" href="{{ URL::to('/reportAttend') }}">Get Attendances PDF </a>
    </td>


</tr>


</table>

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

    <table class="table table-dark">
      <thead class="thead-light">
        <tr>
          <td >ID</td>
          <td >Employee ID with Name </td>
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