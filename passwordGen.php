<?php 

/**
 * Random password generate
 */
function passwordGen(int $number = 8): string
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $characterLength = strlen($characters);
    $password = '';
    for($i=0;$i<$number; $i++){
        $password .= $characters[random_int(0, $characterLength - 1)];
    }
    return $password;
}

echo passwordGen(10);