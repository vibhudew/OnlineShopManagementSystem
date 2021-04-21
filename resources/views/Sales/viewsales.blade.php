@extends('layouts.master')

@section('title', 'Sales')
@section('page-title', 'Sales')
@section('card-title', 'All Sales')

@section('content')

<div class="container">
           
<table class="table table-bordered table-dark">
    <thead>
      <tr>
        <th>Invoice Id</th>
        <th>Invoice Date</th>
        <th>Customers</th>
        <th>Pay Term</th>
        <th>Total Amount</th>
        <th>Payment Method</th>
        <th>Sell Satus</th>
        <th>Payment Status</th>
      </tr>
    </thead>
    
  </table>
 
</div>
<a href="/Sales1"  class="btn btn-success" >Add Sales</a>

  

@endsection