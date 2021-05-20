<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <h1>Manufacturing Details Report</h1>
    <style>
        #tb1{
            font-family: Arial, Helvetica, sans-serif;
             border-collapse: collapse;
            width: 100%; 
           
        }
        #tb1 td,#tb1 th{
            border: 1px solid #dddddd;
            padding: :8px;
        }
        #tb1 tr:nth-child(even){
            background-color: #91ebd4; 
        }
        #tb1 th{
            padding-top:12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: rgb(28, 224, 156);
            color:#fff;

        }
    </style>
</head>
<body>
        <table id="tb1">
            <thead>
                <tr>
                    
                <th>Product Name</th>
                <th>Price</th>
                <th>Number of Units</th>
                <th>Total Cost For All Units</th>
                <th>Manufactured Date And Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach($RecipeReport as $recipe1)
                <tr>
                    <td>{{$recipe1->product_name}}</td>
                    <td>{{$recipe1->cost}}</td>
                    <td>{{$recipe1->num_of_units}}</td>     
                    <td>{{$recipe1->cost_for_all_units}}</td>
                    <td>{{$recipe1->created_at}}</td>
                </tr>  
                @endforeach
            </tbody>
            </table> 
        <br>
</body>
</html>