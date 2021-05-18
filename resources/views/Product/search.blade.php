@extends('layouts.master')

@section('title', 'ProductPage')
@section('page-title', 'Product Manegement')
@section('card-title', 'All Products')

@section('content')


<a href="Products/addproduct" class = "btn btn-primary"> ADD PRODUCT </a>

<form class="form-inline my-2 my-lg-0" type="get" action="{{ url('/search') }}">
  
  <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search Product" aria-label="Search">
  <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>

</form>

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