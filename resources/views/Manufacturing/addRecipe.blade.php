@extends('layouts.master')
@section('title', 'Home page')
@section('page-title', 'Recipe')
@section('content')

<h1 class="display-5">Add Product Recipe</h1>
<div class="jumbotron" >
<div class="mb-3">
  <h4 for="exampleFormControlInput1" class="form-label">Product Name:</h4>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Add product name here">
</div>
<div class="mb-3">
  <h4 for="exampleFormControlTextarea1" class="form-label">Recipe:</h4>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Add recipe here"></textarea>
</div>
<br>
    <button type="submit" class="btn btn-primary" float>Add</button>
    <br>
</div>
    
@endsection