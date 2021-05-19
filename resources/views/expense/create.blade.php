@extends('layouts.NewMaster')

@section('title', 'Expense')
@section('page-title', 'Expense')
@section('card-title', 'Expense')
@section('bigtitle','Add Expense')
@section('sidetitle','Add ')

@section('content')
          @foreach($errors->all() as $error)
          <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
              <i class="now-ui-icons ui-1_simple-remove"></i>
            </button>
            {{$error}}
          </div>
          @endforeach

          <form method="POST" action="/addexpense">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-md-12">
              <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter your name" >
                </div>
              </div>
              <div class="col-md-4">
                  <label for="name">Category</label>
                  <select class="form-control" name="category">
                    @foreach($categories as $category)
                      <option value="{{$category->name}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                </div>
              
              <div class="col-md-4">
                <div class="form-group">
                  <label>Date</label>
                  <input type="date" class="form-control" name="date" >
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Amount</label>
                  <input type="text" class="form-control" name="amount" placeholder="Enter expense amount" >
                </div>
              </div>
              <div class="col-md-6">
                  <label>Expense for contact</label>
                  <select class="form-control" name="contact">
                    @foreach($contcats as $contcat)
                      <option value="{{$contcat->First_name}}">{{$contcat->First_name}}</option>
                    @endforeach
                  </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Description</label>
                  <textarea rows="4" cols="80" class="form-control" name="description" placeholder="Here can be your description"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-1">
                <div class="form-group">
                  <input type="submit" class="btn btn-primary" value="Add">
                </div>
              </div>
              <div class="col-md-1">
                <div class="form-group">
                  <a class="btn btn-danger" href="/expense" role="button" value="">Back</a>
                </div>
              </div>
            </div>
          </form>
        </div>
    </div>
@endsection

@section('sidecontent')

@endsection