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

<div class="container">
<div class="row">
<div class="col-sm-12">
    <br>
    <h1>All Employees</h1>    
    <div>
    <a style="margin: 19px;" href="{{ route('HRM.create')}}" class="btn btn-primary btn-lg">Add Employee</a>
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
          <td >Name</td>
          <td >Address</td>
          <td >NIC</td>
          <td >Mobile</td>
          <td >Email</td>
          <td colspan = 2>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($employees as $employee)
        <tr>
            <td>{{ $employee->id}}</td>
            <td>{{ $employee->fname}} &nbsp;&nbsp; {{$employee->lname}}</td>
            <td>{{ $employee->address}}</td>
            <td>{{ $employee->nic}}</td>
            <td>{{ $employee->mobile}}</td>
            <td>{{ $employee->email}}</td>
            
            <td>
                <a href="{{ route('HRM.edit',$employee->id)}}" class="btn btn-success">Edit</a>
               
            </td>
            <td>
                <form action="{{ route('HRM.destroy', $employee->id)}}" method="post">
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