@extends('layouts.NewMaster')

@section('title', 'Expense')
@section('page-title', 'Expense')
@section('card-title', 'Expense')
@section('bigtitle','All Expense')
@section('sidetitle','Category')

@section('content')

  {!! $dataTable ->table() !!}
  {!! $dataTable ->scripts() !!}
 
@endsection

@section('sidecontent')
<a class="btn btn-primary btn-lg btn-block" href="/expense-categories" role="button">All Category</a>
<a class="btn btn-primary btn-lg btn-block" href="/createexpense" role="button">Add Expense</a>
@endsection

