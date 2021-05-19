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
<<<<<<< HEAD
<a class="btn btn-primary btn-lg btn-block" href="/addexpense" role="button">Add Expense</a>
=======
<a class="btn btn-primary btn-lg btn-block" href="/createexpense" role="button">Add Expense</a>
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
@endsection

