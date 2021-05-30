@extends('layouts.master')

@section('title', 'Purchase')
@section('page-title', 'Purchase')
@section('card-title', 'All  Purchases')

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
    <h1>All Payrolls</h1> 

    <table>
   <tr>
      <td>
            <form class="form-inline my-2 my-lg-0" type="get" action="{{url('/searchPayroll')}}">
            <input class="form-control mr-sm-2" size="100" name="queryPayroll" type="search" placeholder="Type Employee First Name to Get Payroll Records" aria-label="Search">
            <button class="btn btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
          </form>
      </td>

      <td>
      <a class="btn btn-primary" href="#">Get Payrolls PDF for a Employee</a>
      </td>
   </tr>
    
    </table>

   

    <div>
    <a style="margin: 19px;" href="{{ route('Payroll.create')}}" class="btn btn-primary btn-lg">Add Payroll</a>
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
          <td >Month/Year </td>
          <td >Total Work Duration </td>
          <td >Amount per Duration Unit </td>
          <td >Allowances </td>
          <td >Deductions </td>
          <td >Gross Amount </td>
          <td colspan = 2>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($payrolls as $payroll)
        <tr>
            <td>{{ $payroll->id}}</td>
            <td>{{ $payroll->empName}}</td>
            <td>{{ $payroll->monthYear}}</td>
            <td>{{ $payroll->totalWorkDur}}</td>
            <td>Rs. {{ $payroll->amtPerDur}}</td>
            <td>Rs. {{ $payroll->allow}}</td>
            <td>Rs. {{ $payroll->deduct}}</td>
            <td>Rs. {{ $payroll->gross}}</td>
            
            <td>
                <a href="{{ route('Payroll.edit',$payroll->id)}}" class="btn btn-success">Edit</a>
               
            </td>
            <td>
                <form action="{{ route('Payroll.destroy', $payroll->id)}}" method="post">
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

<script>
function myFunction() {
  var num = 5.56789;
  var n = num.toFixed(2);
  document.getElementById("demo").innerHTML = n;
}
</script>


@endsection