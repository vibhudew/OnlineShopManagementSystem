@extends('layouts.master')

@section('title', 'Sales')
@section('page-title', 'Sales')
@section('card-title', 'All Sales')

@section('content')

<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">

        <th>Invoice Id</th>
        <th>Customers</th>
        <th>Total Amount</th>
        <th>Payment Method</th>
        <th>Pay Term</th>
        <th>Payment Status</th>
        <th>Sell Satus</th>
       
        
       
      
       <!--view data in table -->
       @foreach($viewsales1 as $Viewsales1)
        <tr>    
            <td>{{$Viewsales1->invoiceid}}</td> <!--accessing columns in db from $recipe1 variable -->
            <td>{{$Viewsales1->customer}}</td>
            <td>{{$Viewsales1->totalamount}}</td>
            <td>{{$Viewsales1->paymentmethod}}</td>
            <td>{{$Viewsales1->payterm}}</td>
            <td>{{$Viewsales1->paymentstatus}}</td>
            <td>{{$Viewsales1->sellstatus}}</td>
            <td>
                <a href="/deletesales/{{$Viewsales1->id}}" class="btn btn-danger">Delete</a>
                <a href="/updatesale/{{$Viewsales1->id}}" class="btn btn-success">Edit</a>
            </td>
        </tr>
        @endforeach
    
    
  </table>
 
</div>
<a href="/Sales1"  class="btn btn-success" >Add Sales</a>

  

@endsection