@extends('layouts.master')

@section('title', 'Purchase')
@section('page-title', 'Purchase')
@section('card-title', 'Add Purchase')

@section('content')
@foreach($errors->all() as $error)
  <div class="alert alert-danger" role="alert">
    {{$error}}
  </div>

@endforeach
<form method= "post" action="/savepurchase">
  {{csrf_field()}}

<div class="form-row">
  <div class="form-group col-md-6">
 
      <label for="Invoiceid">Invoice ID :</label>
      <input type="text" class="form-control" name="Invoiceid" placeholder="Enter the Invoice Id">
</div>
<div class="form-group col-md-6">
    <label for="customer">Customer:</label>
     <input type="text" class="form-control" name="customer" placeholder="Enter Customer name">

</div>
</div>
<div class="form-row">
  <div class="form-group col-md-6">
      <label for="Totalamount">Total Amount(Rs.):</label>
      <input type="text" class="form-control" name="totamount" placeholder="Enter The Total Amount">
    </div>
    <div class="form-group col-md-6">
    <label for="paymethod">Payment Method:</label>
    <input type="text" class="form-control" name="paymentmethod" placeholder="Enter the payment method">

</div>
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
</div>
<div class="form-group col-md-6">
    <label for="Sellstatus">Sell Status:</label>
    <input type="text" class="form-control" name="sellstatus" placeholder="Enter the sell status">
</div>
<br>
<div class = "row">
<div class = " col-md-10"></div>
<div class = " col-md-2">
<input type="submit"  class="btn btn-primary" value = "Save">
</div>


</form>




@endsection