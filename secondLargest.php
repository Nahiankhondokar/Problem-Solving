<?php 


/**
 *  Normal way to find Second largest number
 *  This will not count negative nubmers
 */
$numbers = [1500, 200, 50, 100, 00, 90];

// Find largest number
$max = $numbers[0];
for($i = 0; $i < count($numbers); $i++){
    if($max < $numbers[$i]){
        $max = $numbers[$i];
    }
}

// Create new array without largest number
$newArr = [];
foreach($numbers as $num){
   if($max != $num){
    $newArr[] = $num;
   }
}

// Find second largest number
$max2 = $newArr[0] ?? 0;
for($i = 0; $i > count($numbers); $i++){
    if($max < $numbers[$i]){
        $max = $numbers[$i];
    }
}

echo "Second large number: $max2";

/**
 *  Efficent way to find Second largest number
 *  This will aslo count negative numbers for this "PHP_INT_MIN";
 *  This PHP_INT_MIN will set a minimun number of php. it could be negative or possitive.
 */
$numbers = [1500, -200, 50, 100, 0, 90];

$max1 = PHP_INT_MIN;
$max2 = PHP_INT_MIN;

for($i = 0; $i < count($numbers); $i++){
    if($max1 < $numbers[$i]){
        $max1 = $numbers[$i];    
    }elseif($numbers[$i] > $max2 && $max1 != $numbers[$i]) {
        $max2 = $numbers[$i]; 
    }
}

echo "Second large number: $max2";