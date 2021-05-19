@extends('layouts.master')
@section('title', 'Add Manufacturing')
@section('page-title','Add Manufacturing')
@section('content')

<div class="container">
    @foreach($errors->all() as $error)
      <div class="alert alert-danger" role="alert">
        {{$error}}
      </div>
      @endforeach  
<form method="POST" action="/saveManufact" >
    {{csrf_field()}}

    <div class="dropdown">
        <label for="dropdown" class="col-sm-4 col-form-label text-md-right"></label>
       
            <h2> Choose Product</h2> 
            <select class="form-control" name="dropdown">
              @foreach($manuData as $recipe1)
              <option value="{{ $recipe1->manufacturingProductName }}">{{ $recipe1->manufacturingProductName }}</option>
              @endforeach 
            </select>   
    </div>

    <br>
    <h2>Price</h2>     
    <input type="text" class="form-control" placeholder="Enter the price" name="price" ></input>
    <br>
    <h2>Pieces</h2>
    <input type="text" class="form-control" placeholder="Enter the number of Units" name="numOfUnits"></input>
    <br>
    <input type="submit" class="btn btn-primary"  value="SAVE"></input> 
</form> 


@endsection