@extends('layouts.NewMaster')

@section('title', 'Expense')
@section('page-title', 'Expense')
@section('card-title', 'All Expense')

@section('content')


    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          <h5 class="title">Edit Category With Budget</h5>
        </div>
        <div class="card-body">
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
                <input type="hidden" class="form-control" name="id" value="{{$editEx_Category->id}}" >
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" value="{{$editEx_Category->name}}" >
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Budget</label>
                  <input type="text" class="form-control" name="amount" value="{{$editEx_Category->amount}}" >
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Budget Timeline</label>
                  <input type="text" class="form-control" name="timeline" value="{{$editEx_Category->timeline}}" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Period</label>
                  <input class="form-control" list="Options" name="period" id="brand" value="{{$editEx_Category->period}}">
                  <datalist id="Options">
                      <option value="Day">
                      <option value="Month">
                      <option value="Year">
                  </datalist>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Description</label>
                  <textarea rows="4" cols="80" class="form-control" name="description" value="{{$editEx_Category->description}}"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Edit">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                <input type="button" class="btn btn-danger btn-lg btn-block" href="/Expenses" role="button" value="Clear">
                </div>
              </div>
            </div>

          </form>
        </div>
    </div>
  </div>


@endsection