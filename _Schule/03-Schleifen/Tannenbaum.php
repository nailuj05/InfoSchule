<style type="text/css"> 
/* Der Text im Body wird zentriert, damit der Baum richtig ausgegeben wird */
body{
    text-align:center; 
}
</style>



<?php

$height = 1;            //Variable height, die die Höhe des Baumes beinhaltet wird erstellt und erhält den Wert 1

while($height < 9){     //Solange die Höhe kleiner als 9 ist (1-8) wird die Schleife ausgeführt
    $width = $height;   //Die Breite des Baumes wird gleich der Höhe gesetzt, die Breite steht für die Anzahl der * Sterne
    
    while($width > 0){  //Solange die Breite größer als 0 ist wird die 2. Schleife ausgeführt
        echo '*';       //Für jeden Durchlauf wird ein Stern ausgegeben
        $width--;       //Von der Breite wird 1 abgezogen
    }
    echo '<br>';        //Nach dem die volle Breite ausgegeben wird gibt es einen Zeilenumbruch

    $height++;          //Die Höhe wird um 1 erhöht
}

echo 'N';               //Am Ende wird noch ein N als Stamm ausgegeben

?>