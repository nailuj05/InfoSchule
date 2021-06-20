<html>
<head>
    <title>Geo Math</title>
</head>
<body>
    <h1>Geometrie</h1>
    <h2>Fläche eines gleichseitigen Dreiecks</h2>
    <form method ="get" action="geoMath.php">
        Länge A: <input type="text" name="TriA"/>
        <input type="submit" value="Berechnen">
    </form>

    <h2>Fläche eines Quadrates</h2>
    <form method ="get" action="geoMath.php">
        Länge A: <input type="text" name="SquA"/>
        <input type="submit" value="Berechnen">
    </form>

    <h2>Kreisfläche</h2>
    <form method ="get" action="geoMath.php">
        Radius R: <input type="text" name="CircleR"/>
        <input type="submit" value="Berechnen">
    </form>

    <h2>Würfelvolumen</h2>
    <form method ="get" action="geoMath.php">
        Länge L: <input type="text" name="CubeL"/>
        Breite W: <input type="text" name="CubeW"/>
        Höhe H: <input type="text" name="CubeH"/>
        <input type="submit" value="Berechnen">
    </form>

    <h2>Kugelvolumen</h2>
    <form method ="get" action="geoMath.php">
        Radius R: <input type="text" name="SphereR"/>
        <input type="submit" value="Berechnen">
    </form>
</body>
</html>

<style type="text/css">
    body{
        text-align: center;
    }
</style>

<?php
    function Triangle($a){
        $return = (sqrt(3) / 4) * pow($a, 2);
        return $return;                  
    }

    function Square($a){
        $return = pow($a, 2);
        return $return;
    }

    function Circle($r){
        $return = pi() * pow($r, 2);
        return $return;
    }

    function Cube($l, $w, $h){
        $return = $l * $w * $h;
        return $return;
    }

    function Sphere($r){
        $return = (4/3) * pi() * pow($r, 3);
        return $return;
    }

    if(isset($_GET["TriA"])){
        echo "Die Fläche des gleichseitigen Dreiecks beträgt " . Triangle((float)$_GET["TriA"]);
    }
    if(isset($_GET["SquA"])){
        echo "Die Fläche des Quadrats beträgt " . Square((float)$_GET["SquA"]);
    }
    if(isset($_GET["CircleR"])){
        echo "Die Fläche des Kreis beträgt " . Circle((float)$_GET["CircleR"]);
    }
    if(isset($_GET["CubeL"]) && isset($_GET["CubeW"]) && isset($_GET["CubeH"])){
        echo "Das Volumen des Würfels beträgt " . Cube((float)$_GET["CubeL"], (float)$_GET["CubeW"], (float)$_GET["CubeH"]);
    }
    if(isset($_GET["SphereR"])){
        echo "Das Volumen der Kugel beträgt " . Sphere((float)$_GET["SphereR"]);
    }
?>