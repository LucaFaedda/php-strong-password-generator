<?php 

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    include './function.php';

    
    // if(isset($_GET['psw']) && $_GET['psw'] !== ''){
    //     $lunghezza = $_GET['psw'];
        

    // }
    // else{
    //     echo 'decidi lunghezza password';
    // }



    
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
            <form action="./my_psw.php" method="GET">
                <div class="row">
                    <div class="col-6">
                        <label class="text-light">Lunghezza PSW: </label>
                        <input type="number" name="psw"  >
                    </div>
                    <div class="col-6 d-flex flex-column">
                        <div>
                            <input class="form-check-input" type="checkbox" name="numeri" value="true">
                            <label class="form-check-label text-light">Numeri</label>
                        </div>
                        <div>
                            <input class="form-check-input" type="checkbox" name="simboli" value="true">
                            <label class="form-check-label text-light">Simboli</label>
                        </div>
                        <div>
                            <input class="form-check-input" type="checkbox" name="lettere" value="true">
                            <label class="form-check-label text-light">Lettere</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12" >
                        <button type="submit" class="btn btn-primary">Genera</button>

                    </div>
                </div>
                
            </form>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                <!-- <h3 class="text-light">La tua password:</h3>                
                <h3 class="text-danger"> <?php
                // if(isset($_GET['psw']) && $_GET['psw'] !== ''){
                //     $lunghezza = $_GET['psw'];
                //     echo generatePsw($lunghezza);
                    
                // }
                // else{
                //     echo 'Decidi lunghezza password';
                // }  ?> </h3> -->
            </div>
        </div>
    </div>
    
</body>
</html>