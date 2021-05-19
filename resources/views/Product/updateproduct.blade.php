@extends('layouts.master')

@section('title', 'EditProductPage')
@section('page-title', 'Product Manegement')
@section('card-title', 'Edit Products')

@section('content')

<form action="/updateItems" method="POST">




  {{ csrf_field() }}
  <input type="hidden" class="form-control" name="id" value="{{$ProductDetails->id}}" >
  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="PId">Product ID :</label>
        <input type="PId" class="form-control" id="pId" value="{{$ProductDetails->id}}">
    </div>
    <div class="form-group col-md-6">
        <label for="ProductName">Product Name :</label>
        <input type="ProductName" class="form-control" name="productName" value="{{$ProductDetails->ProductName}}">
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="Unit">Unit :</label>
        <input class="form-control" list="datalistOptions" name="Unit" value="{{$ProductDetails->Unit}}">
    </div>
    <div class="form-group col-md-6">
        <label for="Brand">Brand :</label>
        <input class="form-control" list="datalistOptions" name="brand" value="{{$ProductDetails->Brand}}">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="Category">Category :</label>
        <input class="form-control" list="datalistOptions" name="category" value="{{$ProductDetails->Category}}">
    </div>
    <div class="form-group col-md-6">
        <label for="SubCategory">Sub-Category :</label>
        <input class="form-control" list="datalistOptions" name="subCategory" value="{{$ProductDetails->SubCategory}}">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="DefaultPurchasePrice">Default Purchase Price :</label>
        <input type="DefaultPurchasePrice" class="form-control" name="purchasePrice" value="{{$ProductDetails->DefaultPurchasePrice}}">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="DefaultSellingPrice">Default Selling Price :</label>
        <input type="DefaultSellingPrice" class="form-control" name="sellingPrice" value="{{$ProductDetails->DefaultSellingPrice}}">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="Description">Product Description :</label>
        <input rows="4" cols="80" class="form-control" name="description" value="{{$ProductDetails->ProductDescription}}">
    </div>
  </div>

  <input type ="submit" class="btn btn-primary" value="UPDATE">
  
</form>
@endsection