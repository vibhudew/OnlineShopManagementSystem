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
                <h4><a class="nav-link" href="/stock" >Stock Report</a></h4>
            </li>
          </ul>
      </div>
    </div>
  </nav>
</div>



@endsection