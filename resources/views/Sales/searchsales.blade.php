@extends('layouts.master')


@section('title', 'Sales')
@section('page-title', 'Sales')
@section('card-title', 'All Sales')

@section('content')

@foreach($errors->all() as $error)
  <div class="alert alert-danger" role="alert">
    {{$error}}
  </div>
  @endforeach


  <form class = form-inline my-2 my-lg-0 type="get" action="{{url('/searchsales')}}">
                      <input class="form-control mr-sm-2" type="search"  name ="query" placeholder="search Sales">
                      <button type="submit"  class="btn btn-outline-success my-2-sm-0" >Search</button>
  </form>

<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
              <br><br>
<h2>Search Results</h2>
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
       @foreach($addsales as   $addsales)
        <tr>    
            <td>{{  $addsales->invoiceid}}</td> <!--accessing columns in db from $recipe1 variable -->
            <td>{{  $addsales->customer}}</td>
            <td>{{  $addsales->totalamount}}</td>
            <td>{{  $addsales->paymentmethod}}</td>
            <td>{{  $addsales->payterm}}</td>
            <td>{{  $addsales->paymentstatus}}</td>
            <td>{{  $addsales->sellstatus}}</td>
            <td>
                <a href="/deletesales/{{  $addsales->id}}" class="btn btn-danger">Delete</a>
                <a href="/updatesale/{{  $addsales->id}}" class="btn btn-success">Edit</a>
            </td>
        </tr>
        @endforeach
    
    
  </table>
 
</div>


@endsection