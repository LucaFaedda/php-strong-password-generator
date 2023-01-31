<?php 

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    include './function.php';



    $lunghezza = $_GET['psw'];
    
    
    

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Password Generator</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center text-white">
                <h1>Strong Password Generator</h1>
                <h2>Genera una password sicura</h2>
            </div>
        </div>
        <div class="col-12 mt-5">
            <form action="./index.php" method="GET">
                <input type="number" name="psw"  >
                <button type="submit" class="btn btn-primary">Genera</button>
            </form>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                
                <h3 class="text-danger">La tua password: <?php echo generatePsw($lunghezza); ?> </h3>
            </div>
        </div>
    </div>
    
</body>
</html>