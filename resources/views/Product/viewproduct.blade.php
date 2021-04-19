@extends('layouts.master')

@section('title', 'ProductPage')
@section('page-title', 'Product Manegement')
@section('card-title', 'All Products')

@section('content')

<input type ="button" class = "btn btn-primary" value="ADD">

<table class = "table table-dark">
  <th>Product Name</th>
  <th>Product Id</th>
  <th>Unit Purchase Price</th>
  <th>Unit Selling Price</th>
  <th>Currunt Stock</th>
  <th>Edit</th>
  <th>Delete</th>
</table>  
@endsection