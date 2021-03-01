<?php 
    //Variablen werden angelegt (Eingabe)
    $Zahl1 = 15;
    $Zahl2 = 90;
    $Zusatz = "<br>Zusätze:<br>";

    //Berechnung (Verarbeitung)
    $Summe     = $Zahl1 + $Zahl2;
    $Differenz = $Zahl1 - $Zahl2;
    $Produkt   = $Zahl1 * $Zahl2;

    if($Zahl2 != 0){
        $Quotient  = $Zahl1 / $Zahl2;
    }

    if($Zahl1 < 100){
        $Zusatz = $Zusatz . "Die erste Zahl ist kleiner als 100. <br>";
    }
    if(($Zahl2 % 3) == 0){
        $Zusatz = $Zusatz . "Die zweite Zahl ist durch 3 teilbar. <br>";
    }
    if(($Zahl1 < 100) and ($Zahl1 > 0)){
        $Zusatz = $Zusatz . "Die erste Zahl ist kleiner als 100 aber größer als 0. <br>";
    }
    if(($Zahl1 < 50) and ($Zahl1 % 2 == 0)){
        $Zusatz = $Zusatz . "Die erste Zahl ist kleiner als 50 und grade. <br>";
    }

    //Ausgabe
    if($Zahl2 != 0){
        echo "Die Summe von "       . $Zahl1 . " und " . $Zahl2 . " ist " . $Summe      . "<br>";
        echo "Die Differenz von "   . $Zahl1 . " und " . $Zahl2 . " ist " . $Differenz  . "<br>";
        echo "Das Produkt von "     . $Zahl1 . " und " . $Zahl2 . " ist " . $Produkt    . "<br>";
        echo "Der Quotient von "    . $Zahl1 . " und " . $Zahl2 . " ist " . $Quotient   . "<br>";
    }
    else{
        echo "Division durch Null erfolgreich verhindert. Gerade nochmal gutgegangen 😉";
    }

    echo $Zusatz;
?>