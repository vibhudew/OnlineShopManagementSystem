@extends('layouts.master')

@section('title', 'Sales')
@section('page-title', 'Sales')
@section('card-title', 'Add Sales')

@section('content')
<form method= "post" action="/savesales">
  {{csrf_field()}}
<div class="card">
<div class="container ">
<div class="form-row">
  <div class="form-group col-md-6">
 
      <label for="Invoiceid">Invoice ID :</label>
      <input type="text" class="form-control" name="Invoiceid" placeholder="Enter the Invoice Id">

    </div>
    <div class="form-group col-md-6">
      <label for="Invoicedate">Invoice Date :</label>
    <input type="Text" class="form-control" name="Invoicedate" placeholder="Enter the Invoice Date">
  </div>
  </div>
  
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="Salespay">Sales Payment ID :</label>
     
      <input type="text" class="form-control" name="salespayid" placeholder="Enter the Sales Payment Id">

    </div>

  <div class="form-group col-md-6">
      <label for="Totalamount">Total Amount(Rs.):</label>
      <input type="text" class="form-control" name="totamount" placeholder="Enter The Total Amount">
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
    <label for="customer">Customer:</label>
     <input type="text" class="form-control" name="customer" placeholder="Enter Customer name">

</div>
    <div class="form-group col-md-6">
    <label for="paymethod">Payment Method:</label>
    <input type="text" class="form-control" name="paymentmethod" placeholder="Enter the payment method">

</div>
    <div class="form-row">
    <div class="form-group col-md-6">
    <label for="payterm">Payment Term:</label>
    <input type="text" class="form-control" name="payterm" placeholder="Enter the pay-term">

</div>
<div class="form-group col-md-6">
    <label for="Paymentstatus">Payment Status:</label>
    <input type="text" class="form-control" name="paymentstatus" placeholder="Enter the payment Status">
</div>
<div class="form-group col-md-6">
    <label for="Sellstatus">Sell Status:</label>
    <input type="text" class="form-control" name="sellstatus" placeholder="Enter the sell status">
</div>
<br>
<input type="submit" style="float:right" class="btn btn-primary" value = "Save">
</div>
</div>
</form>




@endsection