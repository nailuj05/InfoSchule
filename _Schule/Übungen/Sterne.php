<?php
    $anzahlSterne = 10;
    $ausgabeString = "";
    
    for($i = $anzahlSterne; $i > 0; $i--)
    {
        $ausgabeString .= "*";
    }

    echo $ausgabeString;
?>