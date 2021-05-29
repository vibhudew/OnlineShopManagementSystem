
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

    <table id = t1>
        <thead>
          <tr style="text-align: center">
            <th>Id</th>
            <th>Product Name</th>
            <th>UnitPrice(Rs.)</th>
            <th>CurrentStock</th>
            <th>TotalStockValue</th>
          </tr>
        </thead>
        <tbody>
        @foreach($ProductStock as $ProductStock)
          <tr style="text-align: center">
            <td>{{$ProductStock->id}}</td>
            <td>{{$ProductStock->StockName}}</td>
            <td>{{$ProductStock->UnitPrice}}</td>
            <td>{{$ProductStock->CurrentStock}}</td>
            <td>{{$ProductStock->TotalStockValue}}</td>

          </tr>
        @endforeach
        </tbody>
    </table>

</body>
</html>