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

<form method="post" action="/saveStock">
{{csrf_field()}}

    <div class="col-md-6">
        
        <label>Product Name</label>
        <select class="form-control" name="stockname">
            @foreach($products as $product)
                    <option value="{{$product->ProductName}}" > {{$product->ProductName}}</option>
            @endforeach
        </select>
    </div>

  
    <div class="col-md-6">
        <label>Selling Price</label>
        <select class="form-control" name="unitprice">
          @foreach($products as $product)
            <option value="{{$product->DefaultSellingPrice}}" > {{$product->DefaultSellingPrice}}</option>
          @endforeach
        </select>
    </div>

    <div class="form-group col-md-6">
        <label for="Brand">Current Stock :</label>
        <input class="form-control" list="brandList" name="currentstock" placeholder="Current Stock">
    </div>



  <input type ="submit" class="btn btn-primary" value="SAVE">

</form>
@endsection