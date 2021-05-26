@extends('layouts.master')

@section('title', 'EditAccountDetailsPage')
@section('page-title', 'Account Manegement')
@section('card-title', 'Edit Accounts')

@section('content')

<form>

<div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Name :</label>
      <input type="name" class="form-control" id="accName" placeholder="Exc tax">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="AccountNumber">Account Number :</label>
      <input type="AccountNumber" class="form-control" id="accNum" placeholder="Exc tax">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="AccountType">Account Type :</label>
      <input type="AccountType" class="form-control" id="acctype" placeholder="Type to search...">
      <datalist id="datalistOptions">
        <option value="San Francisco">
        <option value="New York">
        <option value="Seattle">
        <option value="Los Angeles">
        <option value="Chicago">
    </datalist>
    </div>
    </div>
    
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Note">Note :</label>
      <input type="Note" class="form-control" id="notice" placeholder="Exc tax">
    </div>
  </div>

  <input type ="submit" class="btn btn-primary" value="UPDATE">
</form>
@endsection