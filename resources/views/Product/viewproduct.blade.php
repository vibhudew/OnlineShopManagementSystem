@extends('layouts.master')

@section('title', 'ProductPage')
@section('page-title', 'Product Manegement')
@section('card-title', 'All Products')

@section('content')

<<<<<<< HEAD
<<<<<<< HEAD
<a href="Products/addproduct" class = "btn btn-primary"> ADD </a>
=======
=======
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1
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


<form class="form-inline my-2 my-lg-0" type="get" action="{{ url('/search') }}">
  
  <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search Product" aria-label="Search">
  <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>

</form>

<<<<<<< HEAD
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
=======
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1
<div class="card-body">
  <div class="table-responsive">
    <table class="table">
      <thead class=" text-primary">
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
      </thead>
      <tbody>
      @foreach($Product1 as $product1)
        <tr style="text-align: center">
          <td>{{$product1->id}}</td>
     <!-- <td>{{$product1->Productid}}</td> -->
          <td>{{$product1->ProductName}}</td>
          <td>{{$product1->Unit}}</td>
          <td>{{$product1->Brand}}</td>
          <td>{{$product1->Category}}</td>
          <td>{{$product1->SubCategory}}</td>
          <td>{{$product1->DefaultPurchasePrice}}</td>
          <td>{{$product1->DefaultSellingPrice}}</td>
          <td>{{$product1->ProductDescription}}</td>

          <td>
            <a href="/deleteProduct/{{$product1->id}}" class="btn btn-warning">Delete</a>
            <a href="/updateProduct/{{$product1->id}}" class="btn btn-success">Update</a>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>   

</table> 
<<<<<<< HEAD
<<<<<<< HEAD
@endsection
=======

@endsection
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
=======

@endsection
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1
