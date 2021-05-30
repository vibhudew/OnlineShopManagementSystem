@extends('layouts.master')

@section('title', 'Account Page')
@section('page-title', 'Accounts Manegement')
@section('card-title', 'All Accounts')

@section('content')

<form class="form-inline my-2 my-lg-0" type="get" action="{{ url('/searchAccount') }}">
  
  <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search Account" aria-label="Search">
  <button class="btn btn btn-secondary my-2 my-sm-0" type="submit">Search</button>

</form>

<a href="Accounts1" class = "btn btn-primary"> ADD </a>

<div class="col-sm-12">



        @if(session()->get('success'))

          <div class="alert alert-success">

            {{ session()->get('success') }}  

          </div>

        @endif

    </div>  

<table class = "table table-dark">
  <th>Name</th>
  <th>Account Number</th>
  <th>account Type</th>
  <th>Balance</th>
  <th>Note</th>
  <th>Action</th>

@foreach($accounts as $account)
    <tr>
        <td>{{$account->Name}}</td>
        <td>{{$account->AccountNumber}}</td>
        <td>{{$account->AccountType}}</td>
        <td>{{$account->Balance}}</td>
        <td>{{$account->Note}}</td>
        <td>
            <a href="/deleteAccount/{{$account -> id}}" class="btn btn-warning">Delete</a>
        </td> 

         <td>
            <a href="/accountUpdate/{{$account -> id}}" class="btn btn-warning">Edit</a>
        </td>    
        
    </tr>
@endforeach
</table>  

@endsection