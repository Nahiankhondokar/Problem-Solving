<?php 

function reverseInt($value){
    $reverse = 0;
    $negative = false;
    if($value < 0){
        $negative = true;
        $value = $value * -1;
    }

    while($value > 0){
        $lastDigit = $value % 10; // 3
        $value = (int) ($value / 10);

        $reverse = ($reverse * 10) + $lastDigit;
    };

    return $negative == true ? '-'.$reverse : $reverse;
}

echo reverseInt(-123);


