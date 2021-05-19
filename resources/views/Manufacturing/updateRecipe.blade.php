@extends('layouts.master')
@section('title', 'Add Recipe')
@section('page-title', 'Add Recipe')
@section('content')

<h1 class="display-5">Update Product Recipe</h1>

<!--<div class="jumbotron" >-->
<div class="container">
@foreach($errors->all() as $error)
  <div class="alert alert-danger" role="alert">
    {{$error}}
  </div>

@endforeach
<form method="post" action="/updateRecipe2">
{{csrf_field()}}
<div class="mb-3">
      <h4 for="exampleFormControlInput1" class="form-label">Product Name:</h4>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Add product name here" name="mProduct" value="{{$recipeData->manufacturingProductName}}">
  </div>
  <div class="mb-3">
      <h4 for="exampleFormControlTextarea2" class="form-label">Recipe:</h4>
      <input class="form-control" id="exampleFormControlTextarea2" rows="3" placeholder="Add recipe here" name="mRecipe" value="{{$recipeData->recipe}}"></input>
  </div>
  <div class="mb-3">
    <h4 for="exampleFormControlInput3" class="form-label">Steps:</h4>
    <input class="form-control" id="exampleFormControlTextarea3" rows="3" placeholder="Add steps here" name="steps" value="{{$recipeData->steps}}"></input>
  </div>
  <div class="mb-3">
    <h4 for="exampleFormControlInput4" class="form-label">Production Cost:</h4>
    <input type="text" class="form-control" id="exampleFormControlInput4" placeholder="Add production cost here" name="pCost" value="{{$recipeData->production_cost}}">
  </div>
  <div class="mb-3">
    <h4 for="exampleFormControlInput4" class="form-label">Material Cost:</h4>
    <input type="text" class="form-control" id="exampleFormControlInput4" placeholder="Add material cost here" name="mCost" value="{{$recipeData->manufacturing_cost}}">
  </div>
  <input type="hidden" name="id" value="{{$recipeData->id}}"/>
    <div class="text-center">
        <input type="submit" class="btn btn-info" value="Update">     
</div>
</form>
</div>
<!--</div>-->  
    
@endsection