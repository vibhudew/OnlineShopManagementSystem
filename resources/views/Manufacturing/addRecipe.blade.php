@extends('layouts.app')
@section('title', 'Home page')

@section('content')
<h1 class="display-5">Add Product Recipe</h1>
<div class="jumbotron">
    <h3>Product:</h3>
    <select class="form-select" aria-label="Default select example">
        <option selected>Select Product</option>
        <option value="1">Door</option>
        <option value="2">Broom</option>
        <option value="3">Fan Hook</option>
    </select>
    <br> <h3>Ingredient Name:</h3>
    <form class="form-inline" >
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-light my-sm-0" type="submit">Add</button>
    </form>
    <br>
    <table class="table table-hover">
        <th>Ingredient </th>
        <th>Quantity </th>
        <th>Price(Rs.)</th>
        <th>Delete</th>
            <tr>
            <td>Nails</td>
                    <td>
                        <input type="text" size="1" >
                        <select class="form-select" aria-label="Default select example" style="width: 100px;">
                            <option selected>Select</option>
                            <option value="1">Pieces</option>
                            <option value="2">Ft</option>
                            <option value="3">Inches</option>
                        </select>
                    </td>
                <td><input type="text" size="5" ></td>
                <td><button class="btn btn-danger">Delete</button></td>
            </tr>
    </table>
</div>

@endsection