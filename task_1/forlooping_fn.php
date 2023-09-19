<?php


function forlooing_fnIsEven($start, $end, $step) { 
    for ($i = $start; $i <= $end; $i += $step) { 

       if ($i % 2 == 0) {
           echo $i. " " ;
       }
    }
}

forlooing_fnIsEven(2, 20, 2); 

?>


