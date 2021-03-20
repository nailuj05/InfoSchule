<?php

//Variablen werden erstellt
$zähler = 0; 
$n = 10;

for($i = 1; $i < $n; $i++){ //Solange i (Startwert = 1) kleiner als n ist wird die Schleife ausgeführt und i um 1 erhöht
    $zähler += $i;          //Auf den Zähler wird i addiert
    echo $zähler.'<br>';    //Der Zähler wird ausgegeben
}

?>