@extends('layouts.')

@section('title', 'Sales')
@section('page-title', 'Sales')
@section('card-title', 'Edit Sales')

@section('content')
<div class="card">
<div class="container">
  <h6>Customers:</h6>
  <select class="form-select" aria-label="Default select example">
  <option selected>Select</option>
  <option value="1">Shashika</option>
  <option value="2">Hiran</option>
  <option value="3">Kaveen</option>
</select>
</div>
</div>
<div class="card">
<div class="container">
  <h6>Sell Status:</h6>
  <select class="form-select" aria-label="Default select example">
  <option selected> Select </option>
  <option value="1">Recieved</option>
  <option value="2">Pending</option>
</select>                                         
</div>
</div>
<div class="card">
<div class="container">
  <h6>Pay Term:</h6>
                                           
  <select class="form-select" aria-label="Default select example">
  <option selected> Select </option>
  <option value="1">PIA</option>
  <option value="2">COD</option>
  <option value="3">EOM</option>
</select>
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
<div class="row">
      <div class='col-sm-6'>
      <h6>invoice date:</h6>
         <input type='text' class="form-control" id='datetimepicker4' />
      </div>
      <script type="text/javascript">
         $(function () {
             $('#datetimepicker4').datetimepicker();
         });
      </script>
   </div>
</div>
</div>
<div class="card ">
<div class="container ">
<form action="/action_page.php">
  <div class="form-group ">
    <h6>Total Amount(Rs.):</h6>
    <input type="text" class="form-control " placeholder="Enter Total Amount" id="invoice id">
  </div>
  </form>
</div>
</div>
<div class="card">
<div class="container">
  <h6>Payement Method:</h6>
  <select class="form-select" aria-label="Default select example">
  <option selected> Select </option>
  <option value="1">Credit Cards</option>
  <option value="2">Debit Cards</option>
  <option value="3">Cash</option>
  <option value="4">Checks</option>
</select>                                         
  </div>
</div>
<div class="card">
<div class="container">
  <h6>Payement Status:</h6>
  <select class="form-select" aria-label="Default select example">
  <option selected> Select </option>
  <option value="1">Paid</option>
  <option value="2">Due</option>
  <option value="3">Particial</option>
</select>
</div>
</div>


@endsection