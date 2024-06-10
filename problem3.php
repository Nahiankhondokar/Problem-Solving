<?php 

/**
 * Problem - 03
 * String reverse of each word not full sentance.
 */
$textOne = 'I love programming';
function reverseEachWordSolutionOne($text)
{
    $resultArr = [];
    $newArr = explode(' ', $text);
    foreach($newArr as $item){
        $resultArr[] = strrev($item);
    }
    $finalData = implode(" ", $resultArr); // string
    return $finalData;
}

echo reverseEachWordSolutionOne($textOne);

/**
 * Problem - 03
 * String reverse of each word not full sentance.
 */
$textTwo = 'I love Coding';
function reverseEachWordSolutionTwo($text)
{
    $resultStr = '';
    $newArr = explode(' ', $text); // array
    foreach($newArr as $item){
        
        for($i = strlen($item)-1; $i >= 0; $i--){
            $resultStr .= $item[$i];
        }
        $resultStr .= ' ';
    }

    return  $resultStr;
}

echo reverseEachWordSolutionTwo($textTwo);