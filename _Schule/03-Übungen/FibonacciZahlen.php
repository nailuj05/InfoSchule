<?php
    $length = 10;

    $prev = 0;
    $current = 1;

    for($i = 0; $i < $length; $i++){
        echo $current . "<br>";

        $new = $prev + $current;

        $prev = $current;
        $current = $new;
    }
?>