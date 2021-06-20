<html>
<head>
    <title>Auto Summe</title>
</head>
<body>
    <form method ="get" action="autoSum.php">
        X (Ganzzahlig): <input type="text" name="inX" defaultValue="0"/>
        Y (Ganzzahlig): <input type="text" name="inY" defaultValue="0"/>
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
    if(empty($_GET["inX"]) && empty($_GET["inY"])){
        return;
    }

    function autoSum($x, $y){
        printf("X wurde als %u und Y als %s definiert <br>", $x, $y)  ;
        $return = $x + $y;
        return $return;                  
    }

    $inX = (int)$_GET["inX"];
    $inY = (int)$_GET["inY"];
    $ergebnis = autoSum($inX, $inY);

    echo "Die Lösung ist: " . $ergebnis;
?>