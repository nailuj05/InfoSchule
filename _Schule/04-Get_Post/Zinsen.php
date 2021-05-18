<?php
    //Eingabe
    $kapital = $_GET["betrag"];
    $prozentsatz = $_GET["prozentsatz"];
    $jahre = $_GET["jahr"];

    //Kaptial kleiner als 1000? -> Kapital = 1000
    if($kapital < 1000){
        $kapital = 1000;
    }

    //Kein Prozentsatz > 10;
    if($prozentsatz > 10){
        $prozentsatz = 10;
    }

    //Kleinerer Prozentsatz bei Kaptial > 100000
    if($kapital > 100000 && $prozentsatz > 1){
        $prozentsatz = $prozentsatz - 1;
    }

    //Zinsberechnung
    for($i = $jahre; $i > 0; $i--)
    {
        $kapital += $kapital * ($prozentsatz / 100);
    }

    //Kaptial runden
    $kapital = round($kapital, 2);

    //Ausgabe
    echo $kapital . "€";
?>