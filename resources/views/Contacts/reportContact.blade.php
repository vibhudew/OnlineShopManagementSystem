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
            <th> Id</th>
            <th>Business id</th>
            <th>Type </th>
            <th>Business_Name</th>
            <th>First_name</th>
            <th>Last_name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>Action</th>



            @foreach($Contact as $contact)
            <tr>
              <td>{{$contact->id}}</td>
              <td>{{$contact->Business_id}}</td>
              <td>{{$contact->Type}}</td>
              <td>{{$contact->Business_name}}</td>
              <td>{{$contact->First_name}}</td>
              <td>{{$contact->Last_name}}</td>
              <td>{{$contact->Email}}</td>
              <td>{{$contact->Mobile}}</td>
              <td>{{$contact->Address}}</td>
              <td>{{$contact->Action}}</td>

             
            </tr>

        @endforeach
        </tbody>
    </table>

</body>
</html>
