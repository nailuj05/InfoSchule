<?php 
    //Variablen werden angelegt (Eingabe)
    $Zahl1 = 5;
    $Zahl2 = 0;

    //Berechnung (Verarbeitung)
    $Summe     = $Zahl1 + $Zahl2;
    $Differenz = $Zahl1 - $Zahl2;
    $Produkt   = $Zahl1 * $Zahl2;

    if($Zahl2 != 0){
        $Quotient  = $Zahl1 / $Zahl2;
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
?>