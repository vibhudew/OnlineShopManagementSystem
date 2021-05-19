@extends('layouts.master')

@section('title', 'HRM')
@section('page-title', 'HRM')
@section('card-title', 'Payroll Management')

@section('content')

<div id="app">
        <div id="navbar">
<<<<<<< HEAD
<<<<<<< HEAD
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background-color: #e3f2fd;">
=======
		<nav class="navbar navbar-expand-lg navbar-dark bg-info" style="background-color: #e3f2fd;">
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
=======
		<nav class="navbar navbar-expand-lg navbar-dark bg-info" style="background-color: #e3f2fd;">
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1
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
    <h1 class="display-5">Edit Payroll</h1>
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
    <form method="post" action="{{ route('Payroll.update', $payroll->id) }}">
      {{ method_field('PUT') }}
          @csrf
<<<<<<< HEAD
<<<<<<< HEAD
         
      <div class="form-group" class="mb-3">
          <label for="empName">Employee Name :</label>
          <input type="text" class="form-control" name="empName" id="empName" value="{{$payroll->empName }}" required />
        </div>
=======
=======
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1

          <div class="dropdown" class="mb-3">    
              <label for="empName">Employee Name:</label>
                  <select class="form-control" name="empName" value="{{$payroll->empName }}">
                      @foreach ($employees as $employee)
                          <option value="{{ $employee->id}} &nbsp&nbsp {{$employee ->name}}">{{$employee ->name}}</option>
                      @endforeach 
                  </select>
             
          </div>
<<<<<<< HEAD
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
=======
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1
        

          <div class="form-group" class="mb-3">
              <label for="monthYear">Month/Year:</label>
              <input type="month" class="form-control" name="monthYear" id="monthYear" value="{{$payroll->monthYear }}" required />
          </div>

      <table>
          <tr>
              <td>
                <div class="form-group" class="mb-3">
                    <label for="totalWorkDur">Total Work Duration:</label>
                    <input type="text" class="form-control" name="totalWorkDur" id="totalWorkDur" value="{{$payroll->totalWorkDur }}"  required/>
                </div>
              </td>
              <td>
                <div class="form-group" class="mb-3">
                    <label for="durUnit">Duration Unit:</label>
                    <input type="text" class="form-control" name="durUnit" id="durUnit" value="Hour" readonly />
                </div>
              </td>
                <td>
                <div class="form-group" class="mb-3">
                    <label for="amtPerDur">Amount per Duration Unit:</label>
                    <input type="text" class="form-control" name="amtPerDur" id="amtPerDur" value="{{$payroll->amtPerDur }}" required />
                </div>
                </td>
          
          </tr>

          </table>

          <div class="form-group" class="mb-3">
              <label for="allow">Allowances:</label>
              <input type="text" class="form-control" name="allow" id="allow" value="{{$payroll->allow }}" required/>
          </div>

          <div class="form-group" class="mb-3">
              <label for="deduct">Deductions:</label>
              <input type="text" class="form-control" name="deduct" id="deduct" value="{{$payroll->deduct }}"  required/>
          </div>

          <div class="form-group" class="mb-3">
                <label for="gross">Gross Amount:</label>
<<<<<<< HEAD
<<<<<<< HEAD
                <input type="text" class="form-control" name="gross" id="gross" value="{{$payroll->gross }}" />
=======
                <input type="text" class="form-control" name="gross" id="gross" value="{{$payroll->gross }}" readonly/>
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
=======
                <input type="text" class="form-control" name="gross" id="gross" value="{{$payroll->gross }}" readonly/>
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1
          </div>

          <br/><br>
          <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
</div>

@endsection