@extends('layouts.master')

@section('title', 'StockPage')
@section('page-title', 'Stock Manegement')
@section('card-title', 'All Stocks')

@section('content')

<div id="app">
    <div id="navbar">
      <nav class="navbar navbar-expand-lg navbar-dark bg-info" style="background-color: #e3f2fd;">
      <div class="container-fluid">
        <h5><a class="navbar-brand" href="#">Products Management</a></h5>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <h4><a class="nav-link active" aria-current="page" href="/Product" >All Products</a></h4>
            </li>
            <li class="nav-item">
                <h4><a class="nav-link" href="Product_Stock" >Stock Report</a></h4>
            </li>
          </ul>
      </div>
    </div>
  </nav>
</div>

<a href="/Product_Stock/addstock" class = "btn btn-primary"> ADD STOCK DETAILS </a>


<div class="card-body">
  <div class="table-responsive">
    <table class="table">
      <thead class=" text-primary">
        <tr style="text-align: center">
          <th>Id</th>
          <th>Product Name</th>
          <th>UnitPrice(Rs.)</th>
          <th>CurrentStock</th>
          <th>TotalStockValue</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach($ProductStock as $ProductStock)
        <tr style="text-align: center">
          <td>{{$ProductStock->id}}</td>
          <td>{{$ProductStock->StockName}}</td>
          <td>{{$ProductStock->UnitPrice}}</td>
          <td>{{$ProductStock->CurrentStock}}</td>
          <td>{{$ProductStock->TotalStockValue}}</td>

          <td>
            <a href="/deleteStock/{{$ProductStock->id}}" class="btn btn-warning">Delete</a>
            <a href="/updateStockBtn/{{$ProductStock->id}}" class="btn btn-success">Update</a>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>   

</table> 

@endsection