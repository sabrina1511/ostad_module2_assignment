<?php

function fib($x, $y){
    
    for($i=1; $i<=15; $i++){
        echo $x." ";
        $z = $x + $y;
        $x = $y;
        $y = $z;
    }
}

fib(0, 1);

?>