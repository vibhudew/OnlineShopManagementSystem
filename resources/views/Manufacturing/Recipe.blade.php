@extends('layouts.master')
@section('title', 'Home page')
@section('page-title', 'Recipe')
@section('content')

    <h1>Manufacturing Recipes</h1>
    <a href="/Manufacturing1"  class="btn btn-success" >Add Recipe</a>
    <br><br>
    <table class="table table-dark">
        <th>ID</th>
        <th>Product Name</th>
        <th>Recipe</th>

        <!--view data in table -->
        @foreach($Recipe1 as $recipe1)
        <tr>    
            <td>{{$recipe1->id}}</td> <!--accessing columns in db from $recipe1 variable -->
            <td>{{$recipe1->manufacturingProductName}}</td>
            <td>{{$recipe1->recipe}}</td>
        </tr>
        @endforeach
    </table>

@endsection