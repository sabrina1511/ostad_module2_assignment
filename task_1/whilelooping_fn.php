<?php


function whilelooing_fnIsEven($start, $end, $step) { 
   
   

    $i = $start;
    while ( $i <= $end) { 

       if ($i % 2 == 0) {
           echo $i. " " ;
       }
       $i += $step;
    }
}

whilelooing_fnIsEven(2, 20, 2); 

?>


