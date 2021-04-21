@extends('layouts.master')
@section('title', 'Home page')
@section('page-title', 'Recipe')
@section('content')

<h1 class="display-5">Add Product Recipe</h1>

<!--<div class="jumbotron" >-->
<div class="container">
@foreach($errors->all() as $error)
  <div class="alert alert-danger" role="alert">
    {{$error}}
  </div>

@endforeach
<form method="post" action="/saveRecipe">
{{csrf_field()}}
<div class="mb-3">
      <h4 for="exampleFormControlInput1" class="form-label">Product Name:</h4>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Add product name here" name="mProduct">
  </div>
  <div class="mb-3">
      <h4 for="exampleFormControlTextarea1" class="form-label">Recipe:</h4>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Add recipe here" name="mRecipe"></textarea>
  </div>
    <div class="text-center">
        <input type="submit" class="btn btn-info" value="Save">     
</div>
</form>
</div>
<!--</div>-->  
    
@endsection