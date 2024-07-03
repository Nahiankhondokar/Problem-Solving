<?php

$str = "hello world";

// echo stringReverse2($str);
// function stringReverse($str){
// 	$reverse = [];
//     for($i=strlen($str)-1; $i >= 0; $i--){
//     	$reverse [] = $str[$i]; 
//     }
//     return implode($reverse);
// }

// function stringReverse2($str){
// 	$reverse = '';
//     for($i=strlen($str)-1; $i >= 0; $i--){
//     	$reverse .= $str[$i]; 
//     }
//     return $reverse;
// }


// =============================

$mix = "hello123 world";

echo isContainNumber($mix);
function isContainNumber($mix){
    $output = false;
    for($i=0; $i<strlen($mix); $i++){
        if($mix[$i] >= 0){
            $output = true;
            break;
        }
    }
    return $output;
}