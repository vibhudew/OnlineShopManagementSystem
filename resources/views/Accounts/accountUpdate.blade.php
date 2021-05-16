@extends('layouts.master')

@section('title', 'AccountUpdate')
@section('page-title', 'Account Manegement')
@section('card-title', 'Update accounts')

@section('content')

<form method="post" action="/saveAccount">
{{csrf_field()}}

    <div class="form-group col-md-6">
      <label for="Name">Name :</label>
      <input type="Name" class="form-control" name="name" placeholder="Enter the name">
    </div>


    <div class="form-group col-md-6">
      <label for="AccountNumber">Account Number:</label>
      <input type="AccountNumber" class="form-control" name="accountNumber" placeholder="Account Number">
    </div>
  
    <div class="form-group col-md-6">
    <label for="AccountType">Account Type :</label>
    <input class="form-control" list="AccountType" name="accountType" placeholder="Account Type">
    <datalist id="AccountType">
        <option value="Current Account">
        <option value="Saving Account">
    </datalist>
    </div>
    
    <div class="form-group col-md-6">
      <label for="Note">Note :</label>
      <input type="Note" class="form-control" name="note" placeholder="Note">
    </div>
   
    <input type ="submit" class="btn btn-primary" value="Update">
  
</form>
@endsection