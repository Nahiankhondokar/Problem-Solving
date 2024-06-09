<?php 

/**
 * Sample input 1:
 * 10 12 15 189 22 2 34
 * Sample output 2:
 */
function minimumIntOne(array $numbers)
{
    $output = $numbers[0];
    foreach($numbers as $number){
        if($output > $number){
            $output = $number;
        }
    }
    return $output;
}
echo minimumIntOne([10, 12, 15, 189, 22, 2, 34]);

/**
 * Sample input 2:
 * 10 -12 34 12 -3 123
 * Sample output 3:
 */
function minimumIntTwo(array $numbers)
{
    $output = $numbers[0];
    foreach($numbers as $number){
        if($number < 0){
            $number = $number * -1;
        }

        if($output > $number){
            $output = $number;
            }
    }
    return $output;
}
 echo minimumIntTwo([10, -12, 34, 12, -3, 123]);