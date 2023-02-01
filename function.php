<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);




function generatePsw($lunghezza)
{
    if(isset($_GET['numeri']) && $_GET['numeri'] !== true){
        $numeri = $_GET['numeri'];
    }
    else{
        $numeri = null;
    }

    if(isset($_GET['simboli']) && $_GET['simboli'] !== true){
        $simboli = $_GET['simboli'];
    }
    else{
        $simboli = null;
    }

    if(isset($_GET['lettere']) && $_GET['lettere'] !== true){
        $lettere = $_GET['lettere'];
    }
    else{
        $lettere = null;
    }

    $password = '';
    if($numeri && $simboli && $lettere){ // tutto
        $valori = 'abcdefghijklmnopqurstuvwyzABCDEFGHIJKLMNOPQURSTUVWYZ0123456789!?%&()[]{}^"><+-*/';
        for($i = 0; $i<$lunghezza ; $i++){
            $password .= $valori[rand(0, strlen($valori) - 1)]; 
            // si poteva fare senza for in questo modo con il ciclo while.
            // while(strln($password) < $lunghezza){
            //     $randomChar = $valori[rand(0, strlen($valori) - 1)];
            //     $password .= $valori;
            // }
            // oltreutto rand(0, strlen($valori) - 1) potevo metterlo come funzione
    
            // passo i valori randomici da 0 ad un massimo della lunghezza di valori quindi se ho come valore massimo 80 nella stringa valori non posso randomizzare più di 80 volte
            
        }
    
    }
    else if($numeri && $simboli){ // numeri e simboli
        $valori = '0123456789!?%&()[]{}^"><+-*/';
        for($i = 0; $i<$lunghezza ; $i++){
            $password .= $valori[rand(0, strlen($valori) - 1)];            
        }
    }
    else if($numeri  && $lettere){ // numeri e lettere
        $valori = 'abcdefghijklmnopqurstuvwyzABCDEFGHIJKLMNOPQURSTUVWYZ0123456789';
        for($i = 0; $i<$lunghezza ; $i++){
            $password .= $valori[rand(0, strlen($valori) - 1)];            
        }
    }
    else if($lettere && $simboli){ // lettere e simboli
        $valori = 'abcdefghijklmnopqurstuvwyzABCDEFGHIJKLMNOPQURSTUVWYZ!?%&()[]{}^"><+-*/';
        for($i = 0; $i<$lunghezza ; $i++){
            $password .= $valori[rand(0, strlen($valori) - 1)];            
        }
    }
    else if($lettere){ // solo lettere
        $valori = 'abcdefghijklmnopqurstuvwyzABCDEFGHIJKLMNOPQURSTUVWYZ';
        for($i = 0; $i<$lunghezza ; $i++){
            $password .= $valori[rand(0, strlen($valori) - 1)];            
        }

    }
    else if($numeri){ // solo numeri
        $valori = '0123456789';
        for($i = 0; $i<$lunghezza ; $i++){
            $password .= $valori[rand(0, strlen($valori) - 1)];            
        }
    }
    else if($simboli){ // solo simboli
        $valori = '!?%&()[]{}^"><+-*/';
        for($i = 0; $i<$lunghezza ; $i++){
            $password .= $valori[rand(0, strlen($valori) - 1)];            
        }
    }
    else{
        echo 'inserisci almeno un valore';
    }
    return $password;

    
};



?>