@extends('layouts.master')

@section('title', 'Sales')
@section('page-title', 'Sales')
@section('card-title', 'All Sales')

@section('content')

<div class="container">
           
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Invoice Id</th>
        <th>Invoice Date</th>
        <th>Item Id</th>
        <th>Contact Id</th>
        <th>Total Amount</th>
        <th>Payment Due</th>
        <th>Sell Satus</th>
        <th>Payment Status</th>
      </tr>
    </thead>
    
  </table>
 
</div>
<button type="button" class="btn btn-primary">ADD</button>
  <button type="button" class="btn btn-secondary">EDIT</button>
  <button type="button" class="btn btn-success">DELETE</button>

@endsection