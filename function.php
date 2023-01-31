<?php 

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