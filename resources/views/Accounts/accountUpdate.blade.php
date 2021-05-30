@extends('layouts.master')
@section('title', 'Add account')
@section('page-title', 'Add account')
@section('content')

<h1 class="display-5">Update Account</h1>

<!--<div class="jumbotron" >-->
<div class="container">
@foreach($errors->all() as $error)
  <div class="alert alert-danger" role="alert">
    {{$error}}
  </div>

@endforeach
<form method="post" action="/accountUpdate2">

{{csrf_field()}}

<input type="hidden" class="form-control" name="id"  value="{{$accounts->id}}"></input>

<div class="form-group col-md-6">
      <label for="Name">Name :</label>
      <input type="Name" class="form-control" name="name"  value="{{$accounts->Name}}"></input>
    </div>
  
    <div class="form-group col-md-6">
      <label for="AccountNumber">Account Number:</label>
      <input type="AccountNumber" class="form-control" name="accountNumber" value="{{$accounts->AccountNumber}}"></input>
    </div>
  <div class="form-group col-md-6">
    <label for="AccountType">Account Type :</label>
    <input class="form-control" list="AccountType" name="accountType">
    <datalist id="AccountType">
        <option value="Current Account">
        <option value="Saving Account">
    </datalist>
    </div>
    <div class="form-group col-md-6">
      <label for="OpeningBalance ">Opening Balance :</label>
      <input type="OpeningBalance" class="form-control" name="balance" value="{{$accounts->Balance}}"></input>
    </div>

    <div class="form-group col-md-6">
      <label for="Note">Note :</label>
      <input type="Note" class="form-control" name="note" value="{{$accounts->Note}}"></input>
    </div>
        <input type="submit" class="btn btn-info" value="Update">     
</div>
</form>
</div>
<!--</div>-->  
    
@endsection