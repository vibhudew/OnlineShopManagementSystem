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
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" >
                </div>
              </div>
              <div class="col-md-4">
                  <label for="name">Category</label>
                  <select class="form-control" name="category" id="category">
                    @foreach($categories as $category)
                      <option value="{{$category->name}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                </div>
              
              <div class="col-md-4">
                <div class="form-group">
                  <label>Date</label>
                  <input type="date" class="form-control" name="date" id="date">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Amount</label>
                  <input type="text" class="form-control" name="amount" id="amount" placeholder="Enter expense amount" >
                </div>
              </div>
              <div class="col-md-6">
                  <label>Expense for contact</label>
                  <select class="form-control" name="contact" id="contact">
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
                  <textarea rows="4" cols="80" class="form-control" name="description" id="description" placeholder="Here can be your description"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <div class="form-group">
                  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Add">
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <a class="btn btn-danger btn-lg btn-block" href="/expense" role="button" value="">Back</a>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <a class="btn btn-warning btn-lg btn-block" href="" onchange="autoFill()">Demo</a>
                </div>
            </div>
            </div>
          </form>
        </div>
    </div>
@endsection

@section('sidecontent')

@endsection

<script type="text/javascript">
  function autoFill() {
    document.getElementById('name').value = "festival Shopping";
    document.getElementById('category').value = "Shopping";
    document.getElementById('date').value = "2021-01-01";
    document.getElementById('amount').value = "3500.00";
    document.getElementById('contact').value = "Riyaj";
    document.getElementById('description').value = "";
  }
</script>