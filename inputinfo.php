<?php
    require_once("tools.php");
    
    $infotools = new infotools();

    if (isset($_GET['name'])) {
        
        $infotools->readdata($_GET);

    }
?>

<!DOCTYPE html>
<html lang="en" style="height:100%">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert The Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body class="h-100" style="height:100%">
    
    <form method="get" style="display: flex;align-items: center;justify-content: center;align-content: center;height: 100%;">
                <div class="border" style="border-radius:30px;padding:20px;">
                    <tr>
                        <th><h3>Insert Here Your Data:</h3></th>
                        <td><input style="margin:10px 0px" class="form-control form-control-lg" type="text" placeholder="Name*" name="name"></td>
                        <td><input style="margin:10px 0px" class="form-control form-control-lg" type="text" placeholder="Favorite food &#x1F356" name="food"></td>
                        <td><input style="margin:10px 0px" class="form-control form-control-lg" type="text" placeholder="Favorite color &#x1F535" name="color"></td>
                        <td><h5 class="text-danger"><?=$infotools->error?></h5></td>
                        <td><input class="btn btn-primary" type="submit" value="Submit"></td>
                    </tr>    
                </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>

