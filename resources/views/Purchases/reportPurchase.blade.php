<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>All Employees</title>
        <style>
              table {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
              }

              td, th {
                border: 1px solid #ddd;
                padding: 8px;
              }

              tr:nth-child(even){background-color: #f2f2f2;}

              tr:hover {background-color: #ddd;}

              th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
              }

              h2{

                  text-align: center;
              }
          </style>    
            

    </head>

    <body>
   

    <h2>All Purchases</h2>

    <table>
        <thead>
        <tr>
            <th>transaction reference number</th>
            <th>supllier id</th>
            <th>discounted price</th>
            <th>total amount</th>
            <th>payment due amount</th>
            <th>purchase status</th>
            <th>payment status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($viewpurchases1 as $Viewpurchases1)
        <tr>
            <td>{{$Viewpurchases1->transactionreferencenumber}}</td> <!--accessing columns in db from $recipe1 variable -->
            <td>{{$Viewpurchases1->supllierid}}</td>
            <td>{{$Viewpurchases1->discountedprice}}</td>
            <td>{{$Viewpurchases1->totalamount}}</td>
            <td>{{$Viewpurchases1->paymentdueamount}}</td>
            <td>{{$Viewpurchases1->purchasestatus}}</td>
            <td>{{$Viewpurchases1->paymentstatus}}</td>
        </tr>
        @endforeach
       
        <tbody>
    </table>


                
    
   
    </body>
</html>