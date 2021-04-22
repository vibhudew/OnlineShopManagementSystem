@extends('layouts.Newmaster')

@section('title', 'Expense')
@section('page-title', 'Expense')
@section('card-title', 'All Expense')

@section('content')

  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h5 class="title">All Expenses</h5>
        </div>
        <a class="btn btn-primary btn-lg" href="/addExpenses" role="button">Add Expense</a>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>ID</th>
                <th>Name</th>
                <th>Budget</th>
                <th>timeline</th>
                <th>Description</th>
                <th>action</th>
              </thead>
              <tbody>
               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          <h5 class="title">Category With Budget</h5>
        </div>
        <div class="card-body">
          <a class="btn btn-primary btn-lg btn-block" href="/Budget" role="button">Add Expense</a>
          
        </div>
    </div>
  </div>


@endsection