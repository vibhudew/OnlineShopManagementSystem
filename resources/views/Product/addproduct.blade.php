@extends('layouts.master')

@section('title', 'AddProductPage')
@section('page-title', 'Product Manegement')
@section('card-title', 'Add Products')


@section('content')


@foreach($errors->all() as $error)

  <div class="alert alert-danger" role="alert">
  {{$error}}

  </div> 

@endforeach

<form method="post" action="/saveProduct">
{{csrf_field()}}

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="PId">Product ID :</label>
      <input type="PId" class="form-control" name="pId" placeholder="ID">
    </div>
    <div class="form-group col-md-6">
      <label for="ProductName">Product Name :</label>
      <input type="ProductName" class="form-control" name="productName" placeholder="Product Name">
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="Unit">Unit :</label>
    <input class="form-control" list="UnitList" name="Unit" placeholder="Type to search...">
    <datalist id="UnitList">
        <option value="Feet(FT)">
        <option value="Kilogram(Kg)">
        <option value="Pieces(Pc(s))">
    </datalist>
    </div>
    <div class="form-group col-md-6">
    <label for="Brand">Brand :</label>
    <input class="form-control" list="brandList" name="brand" placeholder="Type to search...">
    <datalist id="brandList">
        <option value="example">
    </datalist>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="Category">Category :</label>
    <input class="form-control" list="categoryList" name="category" placeholder="Type to search...">
    <datalist id="categoryList">
        <option value="example">
    </div>
    <div class="form-group col-md-6">
    <label for="SubCategory">Sub-Category :</label>
    <input class="form-control" list="subCategoryList" name="subCategory" placeholder="Type to search...">
    <datalist id="subCategoryList">
        <option value="example">
    </datalist>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="DefaultPurchasePrice">Default Purchase Price :</label>
      <input type="DefaultPurchasePrice" class="form-control" name="purchasePrice" placeholder="Exc tax">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="DefaultSellingPrice">Default Selling Price :</label>
      <input type="DefaultSellingPrice" class="form-control" name="sellingPrice" placeholder="Exc tax">
    </div>
  </div>

  <div class="form-group">
    <label for="Description">Product Description :</label>
    <textarea class="form-control" name="description" rows="4" placeholder="Text Area"></textarea>
  </div>

  <input type ="submit" class="btn btn-primary" value="SAVE">

</form>
@endsection