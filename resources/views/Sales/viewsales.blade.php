@extends('layouts.master')


@section('title', 'Sales')
@section('page-title', 'Sales')
@section('card-title', 'All Sales')

@section('content')

@foreach($errors->all() as $error)
  <div class="alert alert-danger" role="alert">
    {{$error}}
  </div>
  @endforeach

  <td size="200"></td>
        <td>
        <a class="btn btn-primary" href="/downloadsalespdf">Export to PDF</a>

        
        </td>


  <form class = form-inline my-2 my-lg-0 type="get" action="{{url('/search')}}">
                      <input class="form-control mr-sm-2" type="search"  name ="query" placeholder="search Sales">
                      <button type="submit"  class="btn btn-outline-success my-2-sm-0" >Search</button>
  </form>



<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">

        <th>Invoice Id</th>
        <th>Customers</th>
        <th>Total Amount</th>
        <th>Payment Method</th>
        <th>Pay Term</th>
        <th>Payment Status</th>
        <th>Sell Satus</th>
       
        
       
      
       <!--view data in table -->
       @foreach($viewsales1 as $Viewsales1)
        <tr>    
            <td>{{$Viewsales1->invoiceid}}</td> <!--accessing columns in db from $recipe1 variable -->
            <td>{{$Viewsales1->customer}}</td>
            <td>{{$Viewsales1->totalamount}}</td>
            <td>{{$Viewsales1->paymentmethod}}</td>
            <td>{{$Viewsales1->payterm}}</td>
            <td>{{$Viewsales1->paymentstatus}}</td>
            <td>{{$Viewsales1->sellstatus}}</td>
            <td>
                <a href="/deletesales/{{$Viewsales1->id}}" class="btn btn-danger">Delete</a>
                <a href="/updatesale/{{$Viewsales1->id}}" class="btn btn-success">Edit</a>
            </td>
        </tr>
        @endforeach
    
    
  </table>
 
</div>
<a href="/Sales1"  class="btn btn-success" >Add Sales</a>

<div class="col-md-12">  
        <table class="table table-responsive">
          <thead>
            <tr>
             
            <th>Invoice Id</th>
            <th>Product Name</th>
              <th>Quantity</th>
              <th>Unit Price</th>
              <th>Total Amount</th>
             
            </tr>
          </thead>
          <tbody class="row_container">
            
          <td>
                  <input type="text" name="Invoice_id" class="form-control" placeholder="invoice id">
                </td>  
                 <td>
                  <input type="text" name="Product_name" class="form-control" placeholder="product Name">
                </td>  
                <td>
                  <input type="text" name="quantity" class="form-control" placeholder="Quantity" id="quantity">
                </td>         
                <td>
                  <input type="text" name="unit_price" class="form-control" placeholder="Unit Price" id="unitprice">
                </td>
                <td>
                  <input type="text" name="total" class="form-control" placeholder="Total" id="total" style="cursor: pointer;" readonly>
                </td>
               
              </tr>
          </tbody>
          <tbody>
              <tr>
                <td colspan="3"></td>
                <td></td>
                <td></td>
                </tr>
              <tr>
                <td colspan="3"></td>
                <td>
                  <strong>Sub Total:</strong>
                </td>
                <td>
                  <input type="text" name="subtotal" class="form-control" id="subtotal" value="0.00" readonly>
                </td>
                <td></td>
              </tr>
              <tr>
                <td colspan="3"></td>
                <td>
                  <strong>Discount(%):</strong>
                </td>
                <td>
                  <input type="text" name="" class="form-control" id="vat">
                </td>
                <td></td>
              </tr>
              <tr>
                <td colspan="3"></td>
                <td>
                  <strong>Discounted Total:</strong>
                </td>
                <td>
                  <input type="text" name="" class="form-control" id="vatsubtotal" value="0.00" readonly>
                </td>
                <td></td>
              </tr>
          
          </tbody>
        </table>
    </div>
	
<script type="text/javascript">
 $(document).ready(function() {

    $("#total").click(function() {
        /*var quantity = document.getElementById("quantity").value;*/
        var quantity = $("#quantity").val();

        var unitprice = $("#unitprice").val();
        var total = (quantity*unitprice);

         $('#total').val(total);
         $('#subtotal').val(total);
        
    });

    $('#vat').change(function() {
      var vInput = this.value;

      var subtotal = $("#subtotal").val();

      var vInput = ((vInput*subtotal)/100);

      var vstotal = (parseFloat(subtotal)-parseFloat(vInput)).toFixed(1);
      $('#vatsubtotal').val(vstotal);
      });

  
});
  
</script>


@endsection