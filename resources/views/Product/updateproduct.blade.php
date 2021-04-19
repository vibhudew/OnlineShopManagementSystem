@extends('layouts.master')

@section('title', 'EditProductPage')
@section('page-title', 'Product Manegement')
@section('card-title', 'Edit Products')

@section('content')

<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="PId">Product ID :</label>
      <input type="PId" class="form-control" id="pId" placeholder="ID">
    </div>
    <div class="form-group col-md-6">
      <label for="ProductName">Product Name :</label>
      <input type="ProductName" class="form-control" id="productName" placeholder="Product Name">
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="Unit">Unit :</label>
    <input class="form-control" list="datalistOptions" id="Unit" placeholder="Type to search...">
    <datalist id="datalistOptions">
        <option value="srilanka">
        <option value="New York">
        <option value="Seattle">
        <option value="Los Angeles">
        <option value="Chicago">
    </datalist>
    </div>
    <div class="form-group col-md-6">
    <label for="Brand">Brand :</label>
    <input class="form-control" list="datalistOptions" id="brand" placeholder="Type to search...">
    <datalist id="datalistOptions">
        <option value="San Francisco">
        <option value="New York">
        <option value="Seattle">
        <option value="Los Angeles">
        <option value="Chicago">
    </datalist>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="Category">Category :</label>
    <input class="form-control" list="datalistOptions" id="category" placeholder="Type to search...">
    <datalist id="datalistOptions">
        <option value="San Francisco">
        <option value="New York">
        <option value="Seattle">
        <option value="Los Angeles">
        <option value="Chicago">
    </datalist>
    </div>
    <div class="form-group col-md-6">
    <label for="SubCategory">Sub-Category :</label>
    <input class="form-control" list="datalistOptions" id="subCategory" placeholder="Type to search...">
    <datalist id="datalistOptions">
        <option value="San Francisco">
        <option value="New York">
        <option value="Seattle">
        <option value="Los Angeles">
        <option value="Chicago">
    </datalist>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="DefaultPurchasePrice">Default Purchase Price :</label>
      <input type="DefaultPurchasePrice" class="form-control" id="purchasePrice" placeholder="Exc tax">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="DefaultSellingPrice">Default Selling Price :</label>
      <input type="DefaultSellingPrice" class="form-control" id="sellingPrice" placeholder="Exc tax">
    </div>
  </div>

  <div class="form-group">
    <label for="Description">Product Description :</label>
    <textarea class="form-control" id="description" rows="4" placeholder="Text Area"></textarea>
  </div>

  <input type ="submit" class="btn btn-primary" value="UPDATE">
</form>
@endsection