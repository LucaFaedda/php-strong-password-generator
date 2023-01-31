<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function generatePsw($lunghezza)
{
    $valori = 'abcdefghijklmnopqurstuvwyzABCDEFGHIJKLMNOPQURSTUVWYZ0123456789!?%&';
    $password = '';
    for($i = 0; $i<$lunghezza ; $i++){
        $password .= $valori[rand(0, strlen($valori) - 1)];

        // passo i valori randomici da 0 ad un massimo della lunghezza di valori quindi se ho come valore massimo 80 nella stringa valori non posso randomizzare più di 80 volte
        
    }

    return $password;
};

?>