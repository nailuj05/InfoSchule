<html>
<head>
    <title>Lineare Berechnung</title>
</head>
<body>
    <form method ="get" action="lineareBerechnung.php">
        Eingabe für X: <input type="text" name="eingabe"/>
        <input type="submit" value="senden">
    </form>
</body>
</html>

<style type="text/css">
    body{
        text-align: center;
    }
</style>

<?php
    if(!isset($_GET["eingabe"])){
        return;
    }

    function lineareBerechnung($x){ //Variable X erhält den Wert, mit dem die Funktion aufgerufen wurde, X ist eine lokale Varialbe und kann nur innerhalb der Funtion aufgerufen werden
        echo "X wurde als " . $x . " definiert <br>";   
        $y = 4 * $x + 3;
        return $y;  //Return gibt einen Wert zurück, vergleichbar mit dem Ergebnis für Y, dass man erhält, wenn mein eine Funktion berechnet                    
    }

    $eingabe = $_GET["eingabe"];
    $ergebnis = lineareBerechnung($eingabe);

    echo "Die Lösung ist: " . $ergebnis;
?>