@extends('layouts.app')

@section('title', 'Sales')
@section('page-title', 'Sales')
@section('card-title', 'Edit Sales')

@section('content')
<div class="card">
<div class="container">
  <h6>Customers:</h6>
                                           
  <div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Select
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Shashika</a>
      <a class="dropdown-item" href="#">Hiran</a>
      <a class="dropdown-item" href="#">proboda</a>
    </div>
  </div>
</div>
</div>
<div class="card">
<div class="container">
  <h6>Sell Status:</h6>
                                           
  <div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Select
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Recieved</a>
      <a class="dropdown-item" href="#">Pending</a>
    
    </div>
  </div>
</div>
</div>
<div class="card">
<div class="container">
  <h6>Pay Term:</h6>
                                           
  <div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Select
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">PIA</a>
      <a class="dropdown-item" href="#">COD</a>
      <a class="dropdown-item" href="#">EOM</a>
     </div>
  </div>
</div>
</div>
<div class="card ">
<div class="container ">
<form action="/action_page.php">
  <div class="form-group ">
    <h6>Invoice Id:</h6>
    <input type="text" class="form-control " placeholder="Enter Invoice Id" id="invoice id">
  </div>
  </form>
</div>
</div>
<div class="card">
<div class="container">
  <form>
    <div class="form-group">
      <h6>Invoice Date:</h6>
<input type="text"  data-date-format="mm/dd/yy" id="dp2">
</div>
   </form>
</div>
</div>

</div>

@endsection