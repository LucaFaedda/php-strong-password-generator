<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


session_start();

include './function.php';

$_SESSION['psw'] = $_GET['psw'];
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
    <title>Mostra password</title>
</head>
<body>
    <div class="copntainer">
        <div class="row mt-5">
            <div class="col-12 text-center mt-5 text-light">
                <h1>La tua password: <?php echo generatePsw($lunghezza);?> </h1>
            </div>
        </div>
    </div>
</body>
</html>