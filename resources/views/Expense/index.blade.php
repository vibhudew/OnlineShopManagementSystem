@extends('layouts.NewMaster')

@section('title', 'Expense')
@section('page-title', 'Expense')
@section('card-title', 'Expense')
@section('bigtitle','All Expense')
@section('sidetitle','Category')

@section('content')
<div class="table-responsive">
    <table class="table">
      <thead class=" text-primary">
        <th>ID</th>
        <th>Name</th>
        <th>Category</th>
        <th>Date</th>
        <th>Amount</th>
        <th>Contact</th>
        <th>Description</th>
        <th>action</th>
      </thead>
      <tbody>

      </tbody>
    </table>
  </div>
@endsection

@section('sidecontent')
<a class="btn btn-primary btn-lg btn-block" href="/expense-categories" role="button">All Category</a>
<a class="btn btn-primary btn-lg btn-block" href="/addexpense" role="button">Add Expense</a>
@endsection