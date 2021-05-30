@extends('layouts.master')

@section('title', 'Purchases')
@section('page-title', 'Purchases')
@section('card-title', 'Add Purchases')

@section('content')
@foreach($errors->all() as $error)
  <div class="alert alert-danger" role="alert">
    {{$error}}
  </div>

@endforeach

<div class="col-sm-12">
        @if(session()->get('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}  
          </div>
        @endif
  </div> 
<form method= "post" action="/savepurchases">
  {{csrf_field()}}

<div class="form-row">
  <div class="form-group col-md-6">
 
      <label for="transactionreferencenumber">transaction reference number:</label>
      <input type="text" class="form-control" name="transactionreferencenumber1" placeholder="Enter the transaction reference number">
</div>
<div class="form-group col-md-6">
    <label for="supllierid">supllier id:</label>
     <input type="text" class="form-control" name="supllierid1" placeholder="Enter supllier id">

</div>
</div>
<div class="form-row">
  <div class="form-group col-md-6">
      <label for="discountedprice">discounted price:</label>
      <input type="text" class="form-control" name="discountedprice1" placeholder="Enter The discounted price">
    </div>
    <div class="form-group col-md-6">
    <label for="totalamount">total amount:</label>
    <input type="text" class="form-control" name="totalamount1" placeholder="Enter the total amount">
</div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
    <label for="paymentdueamount">payment due amount:</label>
    <input type="text" class="form-control" name="paymentdueamount1" placeholder="Enter the payment due amount">

<div class="form-group col-md-6">
    <label for="purchasestatus">purchase status:</label>
    <input type="text" class="form-control" name="purchasestatus1" placeholder="Enter the purchase status">
</div>
</div>
<div class="form-group col-md-6">
    <label for="Paymentstatus">payment status:</label>
    <input type="text" class="form-control" name="paymentstatus1" placeholder="Enter the payment Status">
</div>
<br>
<div class = "row">
<div class = " col-md-10"></div>
<div class = " col-md-2">
<input type="submit"  class="btn btn-primary" value = "Save">
</div>
</form>

@endsection