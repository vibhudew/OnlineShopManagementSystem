@extends('layouts.master')

@section('title', 'EditProductPage')
@section('page-title', 'Product Manegement')
@section('card-title', 'Edit Products')

@section('content')

<form action="/updateStocks" method="POST">




  {{ csrf_field() }}
  <input type="hidden" class="form-control" name="id" value="{{$ProductStock->id}}" >

  <div class="col-md-6">
        
    <label>Product Name</label>
      <select class="form-control" name="stockname" value="{{$ProductStock->StockName}}">
          @foreach($products as $product)
                  <option value="{{$product->ProductName}}" > {{$product->ProductName}}</option>
          @endforeach
      </select>
  </div>

  <div class="col-md-6">
    <label>Selling Price</label>
    <select class="form-control" name="unitprice" value="{{$ProductStock->UnitPrice}}">
        @foreach($products as $product)
          <option value="{{$product->DefaultSellingPrice}}" > {{$product->DefaultSellingPrice}}</option>
        @endforeach
    </select>
  </div>

  <div class="form-group col-md-6">
      <label for="Brand">Current Stock :</label>
      <input class="form-control" list="brandList" name="currentstock" value="{{$ProductStock->CurrentStock}}">
  </div>


  <input type ="submit" class="btn btn-primary" value="UPDATE">
  
</form>
@endsection