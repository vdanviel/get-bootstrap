<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showing Your Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body class="h-100">
    
    <div style="display:flex;align-items:center;text-align:center" class="text-bg-success h-50">
        <div class="w-100 d-inline-block">
            <h1>Hello, <i><?=$_GET['name']?></i></h1>
        </div>
    </div>
    <div style="display: flex !important; flex-direction: column; justify-content: space-evenly; text-align:center; padding:60px 0px;"class="h-50 d-inline-block">
        <tr>
            <th><h2>Here is your information:</h2></th>
            <td><h3>Favorite food &#x1F356: <?=$_GET['food']?></h3></td>
            <td><h3>Favorite color &#x1F535: <?=$_GET['color']?></h3></td>
        </tr>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>

