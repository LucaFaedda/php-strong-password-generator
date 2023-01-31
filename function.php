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
        
    }

    return $password;
};

?>