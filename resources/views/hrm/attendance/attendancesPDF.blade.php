<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Attendances</title>
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

        <h2>Attendance Records</h2>

    <table>
        <thead>
        <tr>
       
          <td >Employee ID with Name </td>
          <td >Start Time </td>
          <td >End Time </td>
        </tr>
        </thead>
              <tbody>
              @foreach($attendances as $attendance)
              <tr>
                
                  <td>{{ $attendance->empNameAttend}}</td>
                  <td>{{ $attendance->startTime}}</td>
                  <td>{{ $attendance->endTime}}</td>
              </tr>
              @endforeach
       
        <tbody>
    </table>
    
    </body>
</html>