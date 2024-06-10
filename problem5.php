<?php 

/**
 * 
 */
// $numbers = 62343;
$numbers = 2000;
function sumNumbers($numbers)
{
    $result = 0;
    $lastDigit = 0;
    for($i=0;$i<strlen($numbers); $i++){
        $lastDigit = $numbers % 10; 
        if($lastDigit > 0){
            $result = $result + $lastDigit;
            $numbers = $numbers / 10;
        }
    }
    return $result;
}

 echo sumNumbers($numbers);
 