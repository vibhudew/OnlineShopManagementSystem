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

    <table id = "t1">
<thead>
<tr>
  <th>Name</th>
  <th>Account Number</th>
  <th>account Type</th>
  <th>Balance</th>
  <th>Note</th>
  </tr>
  </thead>
  <tbody>
 
  

@foreach($accounts as $account)
    <tr>
        <td>{{$account->Name}}</td>
        <td>{{$account->AccountNumber}}</td>
        <td>{{$account->AccountType}}</td>
        <td>{{$account->Balance}}</td>
        <td>{{$account->Note}}</td>
           
    </tr>
        @endforeach
        </tbody>
    </table>

</body>
</html>