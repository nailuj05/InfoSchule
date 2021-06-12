<?php
    $feld = array();

    for($i =  0; $i < 10; $i++){
        $zufall = rand(0, 100);
        $feld[$i] = $zufall;
    }

    print_r($feld);
?>