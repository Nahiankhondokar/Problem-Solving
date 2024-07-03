<?php 

// ============ Callback function use as Argument & find Even Number =================

// Find out an even number

$num = [1,2,3,4,5,6,7,8,9];

function findEvenNumber($numbers, $callback){
    $result = [];
    foreach($numbers as $number){
        if($callback($number)){
            $result[]= $callback($number);
        }
    }
    return $result;
}

$output = findEvenNumber($num, function($number){
    if($number % 2 == 0){
        return $number;
    }
});

print_r($output);