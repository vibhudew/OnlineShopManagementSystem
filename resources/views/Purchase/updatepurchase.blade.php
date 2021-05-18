@extends('layouts.master')

@section('title', 'Purchase')
@section('page-title', 'Purchase')
@section('card-title', 'Edit Purchase')

@section('content')
@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
<input type="hidden" name="id" value ="{{$uppurchase->id}}"/>
    {{$error}}
  </div>

@endforeach

<form method= "post" action="/editpurchase">
  {{csrf_field()}}

<div class="form-row">
  <div class="form-group col-md-6">
 
      <label>Invoice ID</label>
      <input type="text" class="form-control" name="Invoiceid" value ="{{$uppurchase->invoiceid}}"/>
</div>
<div class="form-group col-md-6">
    <label for="customer">Customer</label>
     <input type="text" class="form-control" name="customer" value ="{{$uppurchase->customer}}"/>

</div>
</div>
<div class="form-row">
  <div class="form-group col-md-6">
      <label for="Totalamount">Total Amount(Rs.)</label>
      <input type="text" class="form-control" name="totamount" value ="{{$uppurchase->totalamount}}"/>
    </div>
    <div class="form-group col-md-6">
    <label for="paymethod">Payment Method:</label>
    <input type="text" class="form-control" name="paymentmethod" value ="{{$uppurchase->paymentmethod}}"/>

</div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
    <label for="payterm">Payment Term:</label>
    <input type="text" class="form-control" name="payterm" value ="{{$uppurchase->payterm}}"/>

</div>

<div class="form-group col-md-6">
    <label for="Paymentstatus">Payment Status:</label>
    <input type="text" class="form-control" name="paymentstatus" value ="{{$uppurchase->paymentstatus}}"/>
</div>
</div>
<div class="form-group col-md-6">
    <label for="Sellstatus">Sell Status:</label>
    <input type="text" class="form-control" name="sellstatus" value ="{{$uppurchase->sellstatus}}"/>
</div>
<br>
<div class = "row">
<div class = " col-md-10"></div>
<div class = " col-md-6">
<input type="submit"  class="btn btn-primary" value = "Update">
</div>
<div class = "row">
<div class = " col-md-6"></div>
<div class = " col-md-6">
<input type="button"  class="btn btn-danger" value = "Clear">
</div>


@endsection