@extends('layouts.master')

@section('title', 'Sales')
@section('page-title', 'Sales')
@section('card-title', 'Edit Sales')

@section('content')


<form method= "post" action="/editsales">
  {{csrf_field()}}
<div class="form-row">
<div class="form-group col-md-6">
@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
<input type="hidden" name="id" value ="{{$upsale->id}}"/>
    {{$error}}
</div>

@endforeach

<input type="hidden" class="form-control" name="id" value ="{{$upsale->id}}"/>
 
  <label>Invoice ID</label>
      <input type="text" class="form-control" name="Invoiceid1" value ="{{$upsale->invoiceid}}"/>
</div>
<div class="form-group col-md-6">
    <label for="customer">Customer</label>
     <input type="text" class="form-control" name="customer1" value ="{{$upsale->customer}}"/>

</div>
</div>
<div class="form-row">
  <div class="form-group col-md-6">
      <label for="Totalamount">Total Amount(Rs.)</label>
      <input type="text" class="form-control" name="totamount1" value ="{{$upsale->totalamount}}"/>
    </div>
    <div class="form-group col-md-6">
    <label for="paymethod">Payment Method:</label>
    <input type="text" class="form-control" name="paymentmethod1" value ="{{$upsale->paymentmethod}}"/>

</div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
    <label for="payterm">Payment Term:</label>
    <input type="text" class="form-control" name="payterm1" value ="{{$upsale->payterm}}"/>

</div>

<div class="form-group col-md-6">
    <label for="Paymentstatus">Payment Status:</label>
    <input type="text" class="form-control" name="paymentstatus1" value ="{{$upsale->paymentstatus}}"/>
</div>
</div>
<div class="form-group col-md-6">
    <label for="Sellstatus">Sell Status:</label>
    <input type="text" class="form-control" name="sellstatus1" value ="{{$upsale->sellstatus}}"/>
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