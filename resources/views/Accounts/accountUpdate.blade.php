@extends('layouts.master')
@section('title', 'Add account')
@section('page-title', 'Add account')
@section('content')

<h1 class="display-5">accountUpdate2</h1>

<!--<div class="jumbotron" >-->
<div class="container">
@foreach($errors->all() as $error)
  <div class="alert alert-danger" role="alert">
    {{$error}}
  </div>

@endforeach
<form method="post" action="/accountUpdate2">
{{csrf_field()}}
<div class="mb-3">
      <h4 for="exampleFormControlInput1" class="form-label">Name:</h4>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Add account name here" name="name" value="{{$updateAcc->Name}}">
  </div>
  <div class="mb-3">
      <h4 for="exampleFormControlTextarea2" class="form-label">Account Number:</h4>
      <input class="form-control" id="exampleFormControlTextarea2" rows="3" placeholder="Add account number" name="number" value="{{$updateAcc->AccountNumber}}"></input>
  </div>
  <!-- <div class="mb-3">
    <h4 for="exampleFormControlInput3" class="form-label">Account Type:</h4>
    <input class="form-control" id="exampleFormControlTextarea3" rows="3" placeholder="Add account type" name="type" value="{{$updateAcc->AccountType}}"></input>
  </div> -->
  <div class="mb-3">
    <h4 for="exampleFormControlInput4" class="form-label">Balance:</h4>
    <input type="text" class="form-control" id="exampleFormControlInput4" placeholder="Add balance" name="balance" value="{{$updateAcc->Balance}}">
  </div>
  <div class="mb-3">
    <h4 for="exampleFormControlInput4" class="form-label">Note:</h4>
    <input type="text" class="form-control" id="exampleFormControlInput4" placeholder="Add note" name="note" value="{{$updateAcc->Note}}">
  </div>
  <input type="hidden" name="id" value="{{$updateAcc->id}}"/>
    <div class="text-center">
        <input type="submit" class="btn btn-info" value="Update">     
</div>
</form>
</div>
<!--</div>-->  
    
@endsection