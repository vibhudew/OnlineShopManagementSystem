@extends('layouts.master')

@section('title', 'Purchases')
@section('page-title', 'Purchases')
@section('card-title', 'All Purchases')

@section('content')

<div class="container">
           
<table class="table table-bordered table-dark">

        <th>transaction reference number</th>
        <th>supllier id</th>
        <th>discounted price</th>
        <th>total amount</th>
        <th>payment due amount</th>
        <th>purchase status</th>
        <th>payment status</th>
       
       <!--view data in table -->
       @foreach($viewpurchases1 as $Viewpurchases1)
        <tr>    
            <td>{{$Viewpurchases1->transactionreferencenumber}}</td> <!--accessing columns in db from $recipe1 variable -->
            <td>{{$Viewpurchases1->supllierid}}</td>
            <td>{{$Viewpurchases1->discountedprice}}</td>
            <td>{{$Viewpurchases1->totalamount}}</td>
            <td>{{$Viewpurchases1->paymentdueamount}}</td>
            <td>{{$Viewpurchases1->purchasestatus}}</td>
            <td>{{$Viewpurchases1->paymentstatus}}</td>
            <td>
            <a href="/deletepurchases/{{$Viewpurchases1->id}}" class="btn btn-danger">Delete</a>
            <a href="/updatepurchases/{{$Viewpurchases1->id}}" class="btn btn-success">Edit</a>
            <a tile="print the purchase report"  href="{{url('getAllEmployees/'.$Viewpurchases1 ['id'])}}" class="btn btn-success"><i class="fas fa-file-pdf"></i>Print</a>

            </td>
        </tr>
        @endforeach
    
  </table>
 
</div>
<a href="/Purchases1"  class="btn btn-success" >Add Purchases</a>

  

@endsection