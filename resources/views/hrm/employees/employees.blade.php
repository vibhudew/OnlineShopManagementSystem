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
   

    <h2>All Employees</h2>

    <table>
        <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>NIC</th>
        <th>Mobile</th>
        <th>Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($employees as $employee)
        <tr>
        <td>{{ $employee->id}}</td>
        <td>{{ $employee->name}}</td>
        <td>{{ $employee->address}}</td>
        <td>{{ $employee->nic}}</td>
        <td>{{ $employee->mobile}}</td>
        <td>{{ $employee->email}}</td>
        </tr>
        @endforeach
       
        <tbody>
    </table>


                
    
   
    </body>
</html>