@extends('layouts.NewMaster')

@section('title', 'Expense Category with Budget')
@section('page-title', 'Expense Category with Budget')
@section('card-title', 'Expense Category with Budget')
@section('bigtitle','Update Expense Category with Budget')
@section('sidetitle','')

@section('content')

          <form method="POST" action="/editexcategory">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-md-12">
                @foreach($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                  </button>
                  {{$error}}
                </div>
                @endforeach
                <input type="hidden" class="form-control" name="id" value="{{$editcategory->id}}" >
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" value="{{$editcategory->name}}" >
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Budget</label>
                  <input type="text" class="form-control" name="amount" value="{{$editcategory->amount}}" >
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Budget Timeline</label>
                  <input type="text" class="form-control" name="timeline" value="{{$editcategory->timeline}}" >
                </div>
              </div>
              <div class="col-md-6">
                  <label>Period</label>
                  <select class="form-control" name="period" >
                    <option value="{{$editcategory->period}}">{{$editcategory->period}}</option>
                      <option value="Day">Day</option>
                      <option value="Month">Month</option>
                      <option value="Year">Year</option>
                  </select>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Description</label>
                  <textarea rows="4" cols="80" class="form-control" name="description" value="{{$editcategory->description}}"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-1">
                <div class="form-group">
                  <input type="submit" class="btn btn-primary" value="Edit">
                </div>
              </div>
              <div class="col-md-1">
                <div class="form-group">
                <a class="btn btn-danger" href="../expense-categories" role="button" value="Back">Back</a>
                </div>
              </div>
            </div>

          </form>


@endsection