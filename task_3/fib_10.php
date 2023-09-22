<?php
$x = -1;
$y = 1;
$count = 0;

while ($count < 10) {

    $z = $x + $y;

    
    if ($z > 100) {
        break; 
    }

    echo $z . ' ';

    $x = $y;
    $y = $z;
    $count++;
}
?>