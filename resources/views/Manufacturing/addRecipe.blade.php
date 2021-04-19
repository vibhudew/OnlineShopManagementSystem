@extends('layouts.app')
@section('title', 'Home page')
@section('page-title', 'Recipe')
@section('content')

<h1 class="display-5">Add Product Recipe</h1>
<div class="jumbotron" >

<div class="input-group mb-2" style="background-color:white">
  <span class="input-group-text" id="inputGroup-sizing-default" style=" font-weight: bold">Product:</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<br>
<div class="input-group mb-2" style="background-color:white">
  <span class="input-group-text" id="inputGroup-sizing-default" style=" font-weight: bold">Ingredient Name:</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<br> 
  <div class="input-group mb-2" style="background-color:white">
  <span class="input-group-text" id="inputGroup-sizing-default" style=" font-weight: bold">Quantity:</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<br>
<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
  <option selected>Select</option>
  <option value="1">Pieces</option>
  <option value="2">Ft</option>
  <option value="3">Inches</option>
</select>
    <br>
    <button type="submit" class="btn btn-primary" float>Add</button>
</nav>
    <br>
    <table class="table table-success table-striped">
        
        <th>Ingredient Name</th>
        <th>Quantity</th>
            <tr> 
                <td><input type="text" size="5" ></td>
                <td><input type="text"size="5" ></td>
            </tr>
    </table>
    <label>Total Ingredient Cost(Rs):</label>
    <input type="text" id="firstname"><br><br>
    <table class="table table-success table-striped">
        <th>Product Quantity </th>
        <th>Production Cost </th>
        <th>Total Price(Rs.)</th>
            <tr> 
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
                <td><input type="text"size="5" ></td>
            </tr>
    </table>
    <button type="button" class="btn btn-success">Save</button>
    </div>
    
@endsection