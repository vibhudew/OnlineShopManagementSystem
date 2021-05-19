@extends('layouts.master')
@section('title', 'Manufacturing')
@section('page-title', 'Manufacturing')
@section('content')

<h1>Manufacturing</h1>
<br>
<form type="get" action="/search2">
    <div class="input-group">
        <div class="form-outline">
            <input id="search-input" type="search" placeholder="Search Recipes" id="form1" name="query2" class="form-control" />
        </div>
        <input id="search-button" type="submit" class="btn btn-warning"style = "position: relative; bottom:10px " value="Search" >
            {{-- <i class="fas fa-search" ></i> --}}
        </input>
    </div>
</form>
<a href="/insertManufacts" class="btn btn-primary">Add Manufactur</a>
<table class="table table-dark">
    
    <th>Product Name</th>
    <th>Price</th>
    <th>Number of Units</th>
    <th>Total Cost For All Units</th>
    <th>Manufactured Date And Time</th>
  
  

    <!--view data in table -->
    @foreach($displayManufact as $recipe1)
    <tr>    
        <!--accessing columns in db from $recipe1 variable -->
        <td>{{$recipe1->product_name}}</td>
        <td>{{$recipe1->cost}}</td>
        <td>{{$recipe1->num_of_units}}</td>     
        <td>{{$recipe1->cost_for_all_units}}</td>
        <td>{{$recipe1->created_at}}</td>
        <td>
            <a href="/updateManufact/{{$recipe1->id}}" class="btn btn-secondary">Edit</a>
        </td>
        <td>
         <a href="/deleteManufact/{{$recipe1->id}}" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
<a href="/download-pdf" class="btn btn-secondary">Get Report</a>

@endsection