<?php

echo 'while: <br>';

$e = 0;                 //Eine Variable e wird erstellt und der Wert 0 zugewiesen

while($e<10) {          //Solange e kleiner als 10 ist wird die Schleife ausgeführt
    echo 'Hallo<br>';   //Hallo wird ausgegeben
    $e++;               //e wird um 1 erhöht
}

/* Wann sich eine While-Schleife eignet:
Wenn eine Schleife laufen muss, bis ein Wert erreicht wird: z.B. ein Messwert, eine Nutzereingabe oder eine Zufallszahl
Wenn eine Schleife endlos laufen muss und z.B. durch einen break-Befehl beendet wird
    */

echo 'for: <br>';

for($e=0; $e<10; $e++) { //Für jeden Durchlauf der Schleife wird die Variable e, die den Anfangswert 0 hat um 1 erhöht, solange e kleiner als 10 ist
    echo 'Hallo<br>';    //Hallo wird ausgegeben
}

/* Wann sich eine For-Schleife eignet:
Wenn eine Schleife ein feste Anzahl an Durchläufen haben muss.
Wenn eine Schleife über die Elemente einer Liste laufen muss.
    */

?>