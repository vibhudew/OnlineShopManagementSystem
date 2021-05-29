@extends('layouts.master')

@section('title', 'ProductPage')
@section('page-title', 'Product Manegement')
@section('card-title', 'All Products')

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


<a href="Products/addproduct" class = "btn btn-primary"> ADD PRODUCT </a>

<form class="form-inline my-2 my-lg-0" type="get" action="{{ url('/productsearch') }}">
  
  <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search Product" aria-label="Search">
  <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>

</form>

<div class="card-body">
  <div class="table-responsive">
    <table class="table">
      <thead class=" text-primary">
        <tr style="text-align: center">
          <th>Id</th>
          <!-- <th>Product Id</th> -->
          <th>Product Name</th>
          <th>Unit </th>
          <th>Brand</th>
          <th>Category</th>
          <th>SubCategory</th>
          <th>PurchasePrice(Rs.)</th>
          <th>SellingPrice(Rs.)</th>
          <th>ProductDescription</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach($ProductDetails as $ProductDetails)
        <tr style="text-align: center">
          <td>{{$ProductDetails->id}}</td>
     <!-- <td>{{$ProductDetails->Productid}}</td> -->
          <td>{{$ProductDetails->ProductName}}</td>
          <td>{{$ProductDetails->Unit}}</td>
          <td>{{$ProductDetails->Brand}}</td>
          <td>{{$ProductDetails->Category}}</td>
          <td>{{$ProductDetails->SubCategory}}</td>
          <td>{{$ProductDetails->DefaultPurchasePrice}}</td>
          <td>{{$ProductDetails->DefaultSellingPrice}}</td>
          <td>{{$ProductDetails->ProductDescription}}</td>

          <td>
            <a href="/deleteProduct/{{$ProductDetails->id}}" class="btn btn-warning">Delete</a>
            <a href="/updateProduct/{{$ProductDetails->id}}" class="btn btn-success">Update</a>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>   

</table> 
@endsection