<?php

echo 'while: <br>';

$e = 0;                 //Eine Variable e wird erstellt und der Wert 0 zugewiesen

while($e<10) {          //Solange e kleiner als 10 ist wird die Schleife ausgeführt
    echo 'Hallo<br>';   //Hallo wird ausgegeben
    $e++;               //e wird um 1 erhöht
}

echo 'for: <br>';

for($e=0; $e<10; $e++) { //Für jeden Durchlauf der Schleife wird die Variable e, die den Anfangswert 0 hat um 1 erhöht, solange e kleiner als 10 ist
    echo 'Hallo<br>';    //Hallo wird ausgegeben
}

?>