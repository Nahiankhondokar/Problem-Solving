<?php 

/**
 *  Problem solving
 *  Q. Sum numbers horizontally
 *  A. $numbers = 62343; // 18
 */
$numbers = 62343;
function sumNumbersSolutionOne($numbers)
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

 sumNumbersSolutionOne($numbers);


/**
 *  Problem solving
 *  Q. Sum numbers horizontally
 *  A. $numbers = 1000; // 1
 */
$numbers = 1000;
function sumNumbersSolutionTwo($numbers)
{
    $result = 0;
    while($numbers > 0){
        $lastDigit = $numbers % 10;
        $result = $result + $lastDigit;
        $numbers = intdiv($numbers, 10);
    }
    return $result;
}

echo sumNumbersSolutionTwo($numbers);