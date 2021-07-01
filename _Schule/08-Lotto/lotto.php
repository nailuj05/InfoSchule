<?php
    require 'functions.php';

    $lottozahlen = RandArray();

    $lottozahlen = BubbleSort($lottozahlen);

    for ($i=0; $i < count($lottozahlen); $i++) { 
        echo $lottozahlen[$i] . "<br>";
    }
?>