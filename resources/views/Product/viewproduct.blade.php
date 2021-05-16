@extends('layouts.master')

@section('title', 'ProductPage')
@section('page-title', 'Product Manegement')
@section('card-title', 'All Products')

@section('content')

<a href="Products/addproduct" class = "btn btn-primary"> ADD </a>
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
@endsection