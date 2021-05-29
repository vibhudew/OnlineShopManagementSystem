@extends('layouts.master')
@section('title', 'Recipes')
@section('page-title', 'Recipes')
@section('content')

<div class="col-sm-12">
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div>
    @endif
</div>  

    <h1>Manufacturing Recipes</h1>

    <form type="get" action="/searchRecipe">
    <div class="input-group">
        <div class="form-outline">
            <input id="search-input" type="search" placeholder="Search Recipes" id="form1" name="query" class="form-control" />
        </div>
        <input id="search-button" type="submit" class="btn btn-warning"style = "position: relative; bottom:10px" value="Search" >
            {{-- <i class="fas fa-search" ></i> --}}
        </input>
    </div>
    </form>

    <a href="/Manufacturing1"  class="btn btn-success" >Add Recipe</a>
    <a href="/displayManufact"  class="btn btn-info" style="float: right;" >Manufacture</a>
    <br><br>
    <table class="table table-dark">
        {{-- <th>ID</th> --}}
        <th>Product Name</th>
        <th>Recipe</th>
        <th>Steps</th>
        <th>Production Cost</th>
        <th>Material Cost</th>
        <th>Total Cost</th>
      

        <!--view data in table -->
        @foreach($Recipe1 as $recipe1)
        <tr>    
            {{-- <td>{{$recipe1->id}}</td> <!--accessing columns in db from $recipe1 variable --> --}}
            <td>{{$recipe1->manufacturingProductName}}</td>
            <td>{{$recipe1->recipe}}</td>
            <td>{{$recipe1->steps}}</td>
            <td>{{$recipe1->production_cost}}</td>
            <td>{{$recipe1->manufacturing_cost}}</td>
            <td>{{$recipe1->total_cost}}</td>
            <td>
                <a href="/updateRecipe/{{$recipe1->id}}" class="btn btn-secondary">Edit</a>
            </td>
            <td>
                <a href="/deleteRecipe/{{$recipe1->id}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="/download-Recipe-pdf" class="btn btn-secondary">Get Report</a>

@endsection