<?php

echo '<table style="width:100%">';      //Tabelle wird initialisiert

for($i = 1; $i < 11; $i++){             //Die äußere Schleife läuft von 1 bis 11 (1-10), in ihr werden die Zeilen der Tabelle definiert

    echo '<tr>';                        //Die Tabellenzeile wird geöffnet

    for($e = 1; $e < 11; $e++){         //Die innere Schleife läuft von 1 bis 11 (1-10), in ihr werden die Elemente der Tabelle definiert
        echo '<td>'. $e * $i . '</td>'; //Ein Tabellen Element mit dem Inhalt e * i wird ausgegeben
    }

    echo '</tr>';                       //Die Tabellenzeile wird geschlossen

}

?>