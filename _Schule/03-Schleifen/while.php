<?php

//While = Solange, solange die Variable x KLEINER als 6 ist wird der Code innerhalb der Schleife wiederholt. 
while($x < 6){
    $x = rand(1,6);     //Eine Zufallszahl zwischen 1 und 6 wird erstellt und der Variable x zugewiesen
    echo $x.'<br>';     //Die Variable x wird ausgegeben und mit einem Zeilenumbruch ergänzt
}

//Das Programm gibt solange Zufallszahlen zwischen 1 und 6 aus, bis die 6 erreicht wird. 
//Die letzte Ausgabe des Codes ist immer eine 6, da danach die Bedingung der while-Schleife nicht mehr erfüllt ist und das Programm endet.

?>