<?php 

/**
 * Problem Solve
 * problem - 04
 * Stars pyramid.
 */
$number = 10;
pyramidShape($number);
function pyramidShape($number)
{
    for($i=0;$i<$number;$i++){
        for($k=1;$k<$number-$i;$k++){
            echo "&nbsp;&nbsp;";
        }
        for($j=0;$j<$i+1;$j++){
            echo '*&nbsp;&nbsp;';
        }
        
        echo "<br/>";
    }
}

?>