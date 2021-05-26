@extends('layouts.NewMaster')

@section('title', 'Expense')
@section('page-title', 'Expense')
@section('card-title', 'Expense')
@section('bigtitle','All Expense')
@section('sidetitle','')

@section('content')

  {!! $dataTable ->table() !!}
  {!! $dataTable ->scripts() !!}
 
@endsection

@section('sidecontent')

<div class="card text-center">
  <div class="card-body">
  <h1 class="card-title">Total Expense<br>
    Rs.{{$extotale}}</h1>
  </div>
</div>



<a class="btn btn-primary btn-lg btn-block" href="/expense-categories" role="button">All Category</a>
<a class="btn btn-primary btn-lg btn-block" href="/createxpense" role="button">Add Expense</a>
@endsection

