<?php
    $a = 3;
    $b = 5;

    $x = $a;
    $y = $b;

    while($x != $y){

        if($x < $y){
            $x += $a;
        }
        else{
            $y += $b;
        }
    }

    echo $x;
?>