@extends('layouts.master')

@section('title', 'Sales')
@section('page-title', 'Sales')
@section('card-title', 'Add Sales')

@section('content')
<div class="card">
<div class="form-row">
  <div class="form-group col-md-6">
      <label for="Invoiceid">Invoice ID :</label>
      <input type="PId" class="form-control" id="Invoiceid" placeholder="Enter the Invoice Id">
    </div>
    <div class="form-group col-md-6">
      <label for="Invoicedate">Invoice Date :</label>
      <input type="Text" class="form-control" id="Invoicedate" placeholder="Enter the Invoice Date">
    </div>
  </div>
  
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="Salespay">Sales Payment ID :</label>
      <input type="text" class="form-control" id="Invoiceid" placeholder="Enter the Sales Payment Id">
    </div>

  <div class="form-group col-md-6">
      <label for="Totalamount">Total Amount(Rs.):</label>
      <input type="PId" class="form-control" id="pId" placeholder="Enter The Total Amount">
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
    <label for="customer">Customer:</label>
    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
  <option selected>Select</option>
  <option value="1">Shashika</option>
  <option value="2">Hiran</option>
  <option value="3">Kaveen</option>
</select>
</div>
</div>
    <div class="form-row">
<div class="form-group col-md-6">
    <label for="paymethod">Payment Method:</label>
    <select class="form-select" aria-label="Default select example">
  <option selected> Select </option>
  <option value="1">Credit Cards</option>
  <option value="2">Debit Cards</option>
  <option value="3">Cash</option>
  <option value="4">Checks</option>
</select>   
  </div>
  </div>
    <div class="form-row">
    <div class="form-group col-md-6">
    <label for="payterm">Payment Term:</label>
    <select class="form-select" aria-label="Default select example">
  <option selected> Select </option>
  <option value="1">PIA</option>
  <option value="2">COD</option>
  <option value="3">EOM</option>
</select>
</div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
    <label for="Paymentstatus">Payment Status:</label>
    <select class="form-select" aria-label="Default select example">
  <option selected> Select </option>
  <option value="1">Paid</option>
  <option value="2">Due</option>
  <option value="3">Particial</option>
</select>
</div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
    <label for="Sellstatus">Sell Status:</label>
    <select class="form-select" aria-label="Default select example">
  <option selected> Select </option>
  <option value="1">Recieved</option>
  <option value="2">Pending</option>
</select>
</div>
</div>
</div>
  




@endsection