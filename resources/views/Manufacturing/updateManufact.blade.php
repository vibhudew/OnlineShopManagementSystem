@extends('layouts.master')
@section('title', 'Update')
@section('page-title', 'Update')
@section('content')

<h1 class="display-5">Update</h1>
@foreach($errors->all() as $error)
      <div class="alert alert-danger" role="alert">
        {{$error}}
      </div>
      @endforeach 
<form method="POST" action="/updateManufact2" >
    {{csrf_field()}}

     <div class="dropdown">
        <label for="dropdown" class="col-sm-4 col-form-label text-md-right"></label>
        <div>
            <h2> Choose Product</h2>  
            <select class="form-control" name="dropdown">
              @foreach($productName as $Mdata)
              <option value="{{ $Mdata->	manufacturingProductName }}">{{ $Mdata-> 	manufacturingProductName }}</option>
              @endforeach 
            </select>
        </div>
    </div>   

    <br>
    <h2>Price</h2>     
    <input type="text" class="form-control" placeholder="Enter the price" name="price" value="{{ $manufactData->cost }}"></input>
    
    <br>
    <h2>Pieces</h2>
    <input type="text" class="form-control" placeholder="Enter the number of Units" name="numOfUnits" value="{{ $manufactData->num_of_units }}"></input>
    <br>
    <input type="hidden" name="id" value="{{$manufactData->id}}"/>
    <input type="submit" class="btn btn-primary"  value="Update"></input> 
</form> 


@endsection