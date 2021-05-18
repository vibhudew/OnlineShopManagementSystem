@extends('layouts.master')


@section('title', 'Purchase')
@section('page-title', 'Purchase')
@section('card-title', 'All Purchase')

@section('content')

@foreach($errors->all() as $error)
  <div class="alert alert-danger" role="alert">
    {{$error}}
  </div>
  @endforeach



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
       @foreach($viewpurchase1 as $Viewpurchase1)
        <tr>    
            <td>{{$Viewpurchase1->invoiceid}}</td> <!--accessing columns in db from $recipe1 variable -->
            <td>{{$Viewpurchase1->customer}}</td>
            <td>{{$Viewpurchase1->totalamount}}</td>
            <td>{{$Viewpurchase1->paymentmethod}}</td>
            <td>{{$Viewpurchase1->payterm}}</td>
            <td>{{$Viewpurchase1->paymentstatus}}</td>
            <td>{{$Viewpurchase1->sellstatus}}</td>
            <td>
                <a href="/deletepurchase/{{$Viewpurchase1->id}}" class="btn btn-danger">Delete</a>
                <a href="/updatepurchase/{{$Viewpurchase1->id}}" class="btn btn-success">Edit</a>
            </td>
        </tr>
        @endforeach
    
    
  </table>
 
</div>
<a href="/Purchase1"  class="btn btn-success" >Add Purchase</a>

<div class="col-md-12">  
        <table class="table table-responsive">
          <thead>
            <tr>
             
            <th>Sales product Id</th>
            <th>Product Name</th>
              <th>Quantity</th>
              <th>Unit Price</th>
              <th>Total</th>
             
            </tr>
          </thead>
          <tbody class="row_container">
            
          <td>
                  <input type="text" name="Product_id" class="form-control" placeholder="Sales product id">
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
                  <strong>VAT(%):</strong>
                </td>
                <td>
                  <input type="text" name="" class="form-control" id="vat">
                </td>
                <td></td>
              </tr>
              <tr>
                <td colspan="3"></td>
                <td>
                  <strong>VAT+Sub Total:</strong>
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

      var vstotal = (parseFloat(subtotal)+parseFloat(vInput)).toFixed(1);
      $('#vatsubtotal').val(vstotal);
      });

  
  
});
  
</script>


@endsection