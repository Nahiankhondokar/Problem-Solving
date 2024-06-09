<?php 

function reverseInt ($value){
    $reverse = 0;
    $negative = false;
    if($value < 0){
        $negative = true;
        $value = $value * -1;
    }

    while($value > 0)
    {
        $lastDigit = $value % 10;
        $value = (int) ($value/10);

        $reverse = ($reverse * 10) + $lastDigit;
    }

        return $negative ? -1 * $reverse : $reverse;
}

echo reverseInt(-12345);