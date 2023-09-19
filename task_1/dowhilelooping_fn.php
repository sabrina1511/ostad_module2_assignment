<?php


function dowhilelooing_fnIsEven($start, $end, $step) { 
    $i = $start;

    do
   { 
       if ($i % 2 == 0) {
           echo $i. " " ;
       }
       $i += $step;
    }

    while ($i <= $end);
}



dowhilelooing_fnIsEven(2, 20, 2); 

?>