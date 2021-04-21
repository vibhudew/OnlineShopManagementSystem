@extends('layouts.master')

@section('title', 'ProductPage')
@section('page-title', 'Product Manegement')
@section('card-title', 'All Products')

@section('content')

<a href="Products/addproduct" class = "btn btn-primary"> ADD </a>

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