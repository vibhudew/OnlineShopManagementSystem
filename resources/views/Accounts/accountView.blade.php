@extends('layouts.master')

@section('title', 'Account Page')
@section('page-title', 'Accounts Manegement')
@section('card-title', 'All Accounts')

@section('content')

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

@foreach($Account1 as $Account2)
    <tr>
        <td>{{$Account2->Name}}</td>
        <td>{{$Account2->AccountNumber}}</td>
        <td>{{$Account2->AccountType}}</td>
        <td>{{$Account2->Balance}}</td>
        <td>{{$Account2->Note}}</td>
        <td>
            <a href="/deleteAccount/{{$Account2 -> id}}" class="btn btn-warning">Delete</a>
        </td> 

         <td>
            <a href="/accountUpdate/{{$Account2 -> id}}" class="btn btn-warning">Edit</a>
        </td>    
        
    </tr>
@endforeach
</table>  

@endsection