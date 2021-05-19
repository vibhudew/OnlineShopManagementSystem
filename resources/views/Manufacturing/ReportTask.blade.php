<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> --}}
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
            background-color: #0bfdfd; 
        }
        #tb1 th{
            padding-top:12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: aquamarine;
            color:#fff;

        }
    </style>
</head>
<body>
        <table id="tb1">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Recipe</th>
                    <th>Steps</th>
                    <th>Production Cost</th>
                    <th>Material Cost</th>
                    <th>Total Cost</th>
                </tr>
            </thead>
            <tbody>
                @foreach($taskReport as $recipe1)
                <tr>
                    <td>{{$recipe1->manufacturingProductName}}</td>
                    <td>{{$recipe1->recipe}}</td>
                    <td>{{$recipe1->steps}}</td>
                    <td>{{$recipe1->production_cost}}</td>
                    <td>{{$recipe1->manufacturing_cost}}</td>
                    <td>{{$recipe1->total_cost}}</td>
                </tr>  
                @endforeach
            </tbody>
            </table> 
        <br>
</body>
</html>