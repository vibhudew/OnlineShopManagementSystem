<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    #t1{

font-family: Arial, Helvetica, sans-serif;

 border-collapse: collapse;

width: 100%; 



}

#t1 td,#t1 th{

border: 1px solid #dddddd;

padding: 8px;

text-align: center;

}

#t1 tr:nth-child(even){

background-color: #91ebd4; 

}

#t1 th{

padding-top:12px;

padding-bottom: 12px;   

background-color: rgb(28, 224, 156);

color:#fff;



}


    </style>
</head>
<body>
<br><br>
<h2>Sales Report</h2>

<table id="t1" >
     <thead >
         <tr>
        <th>Invoice Id</th>
        <th>Customers</th>
        <th>Total Amount</th>
        <th>Payment Method</th>
        <th>Pay Term</th>
        <th>Payment Status</th>
        <th>Sell Satus</th>
        </tr>
       </thead>
       <tbody>
        
         <!--view data in table -->
       @foreach($addsales as $Viewsales1)
        <tr>    
            <td>{{$Viewsales1->invoiceid}}</td> <!--accessing columns in db from $recipe1 variable -->
            <td>{{$Viewsales1->customer}}</td>
            <td>{{$Viewsales1->totalamount}}</td>
            <td>{{$Viewsales1->paymentmethod}}</td>
            <td>{{$Viewsales1->payterm}}</td>
            <td>{{$Viewsales1->paymentstatus}}</td>
            <td>{{$Viewsales1->sellstatus}}</td>
            
        </tr>
        @endforeach
    
    
  </table>
 
    
</body>
</html>