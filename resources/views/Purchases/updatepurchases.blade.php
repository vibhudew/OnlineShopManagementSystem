@extends('layouts.master')

@section('title', 'Purchases')
@section('page-title', 'Purchases')
@section('card-title', 'Edit Purchases')

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

<form method= "post" action="/editpurchases">
  {{csrf_field()}}
  <input type="hidden" name="id" value ="{{$uppurchase->id}}"/>

<div class="form-row">
  <div class="form-group col-md-6">
 
      <label>Transaction Reference No</label>
      <input type="text" class="form-control" name="transactionreferencenumber1" value ="{{$uppurchase->transactionreferencenumber}}"/>
</div>
<div class="form-group col-md-6">
    <label for="customer">Supplier Id</label>
     <input type="text" class="form-control" name="supllierid1" value ="{{$uppurchase->supllierid}}"/>

</div>
</div>
<div class="form-row">
  <div class="form-group col-md-6">
      <label for="Totalamount">Discounted Price(Rs.)</label>
      <input type="text" class="form-control" name="discountedprice1" value ="{{$uppurchase->discountedprice}}"/>
    </div>
    <div class="form-group col-md-6">
    <label for="paymethod">Total Amount(Rs.)</label>
    <input type="text" class="form-control" name="totalamount1" value ="{{$uppurchase->totalamount}}"/>

</div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
    <label for="payterm">Payment Due Amount(Rs.)</label>
    <input type="text" class="form-control" name="paymentdueamount1" value ="{{$uppurchase->paymentdueamount}}"/>

</div>

<div class="form-group col-md-6">
    <label for="Paymentstatus">Purchase Status:</label>
    <input type="text" class="form-control" name="purchasestatus1" value ="{{$uppurchase->purchasestatus}}"/>
</div>
</div>
<div class="form-group col-md-6">
    <label for="Sellstatus">Payment Status:</label>
    <input type="text" class="form-control" name="paymentstatus1" value ="{{$uppurchase->paymentstatus}}"/>
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