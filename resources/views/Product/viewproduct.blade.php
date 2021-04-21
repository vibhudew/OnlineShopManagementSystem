@extends('layouts.master')

@section('title', 'ProductPage')
@section('page-title', 'Product Manegement')
@section('card-title', 'All Products')

@section('content')

<a href="Products/addproduct" class = "btn btn-primary"> ADD </a>

<table class = "table table-dark">
  <th>Product Id</th>
  <th>Product Name</th>
  <th>Unit </th>
  <th>Brand</th>
  <th>Category</th>
  <th>SubCategory</th>
  <th>DefaultPurchasePrice</th>
  <th>DefaultSellingPrice</th>
  <th>ProductDescription</th>
  <th>Action</th>

  @foreach($Product1 as $product1)
      <tr>
        <td>{{$product1->Productid}}</td>
        <td>{{$product1->ProductName}}</td>
        <td>{{$product1->Unit}}</td>
        <td>{{$product1->Brand}}</td>
        <td>{{$product1->Category}}</td>
        <td>{{$product1->SubCategory}}</td>
        <td>{{$product1->DefaultPurchasePrice}}</td>
        <td>{{$product1->DefaultSellingPrice}}</td>
        <td>{{$product1->ProductDescription}}</td>

        <td>
          <a href="/deleteProduct/{{$product1->Productid}}" class="btn btn-warning">Delete</a>
        </td>
      </tr>
      
  @endforeach


</table>  
@endsection