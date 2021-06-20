<html>
<head>
    <title>Kegelstumpf</title>
</head>
<body>
    <h1> Kegelstumpf </h2>
    <form method ="get" action="kegelstumpf.php">
        Radius Grundfläche R: <input type="text" name="R" required/>
        Radius Deckfläche r: <input type="text" name="r" required/>
        Winkel Mantelline phi: <input type="text" name="phi"/>
        Höhe h: <input type="text" name="h"/>
        <input type="submit" value="Berechnen">
    </form>
</body>
</html>

<style type="text/css">
    body{
        text-align: center;
    }
    .results{
        margin-left: auto;
        margin-right: auto;
    }
    table, th, td{
        border: 1px solid black; 
        border-collapse: collapse;
    }
</style>

<?php
    error_reporting(0);
    function Volumen($R, $r, $h){
        $V = (($h * pi()) / 3) * (pow($R, 2) + $R * $r + pow($r, 2));
        return $V;                  
    }

    function Mantelline($R, $r, $h){
        $m = sqrt(pow($R - $r, 2) + pow($h, 2));
        return $m;
    }

    function Mantelfläche($R, $r, $m){
        $M = ($R - $r) * pi() * $m;
        return $M;
    }

    function Fläche($r){
        $A = pi() * pow($r, 2);
        return $A;
    }

    function Höhe($R, $r, $phi){
        $h = ($R - $r) / tan($phi);
        return $h;
    }

    function Winkel($R, $r, $h){
        $phi = atan(($R - $r) / $h);
        return $phi;
    }

    function Oberfläche($R, $r, $m){
        $A = pi() * (pow($r, 2) + pow($R, 2) + $m * ($r + $R));
        return $A;
    }

    //Calculating Unknown Values
    if(!isset($_GET["R"]) && !isset($_GET["r"])){
        return;
    }

    $R = $_GET["R"];
    $r = $_GET["r"];

    if(!empty($_GET["phi"])){
        echo "Winkel gegeben <br>";

        $phi = $_GET["phi"];

        $h = Höhe($R, $r, $phi);
    }
    else if(!empty($_GET["h"])){
        echo "Höhe gegeben <br>";

        $h = $_GET["h"];

        $phi = Winkel($R, $r, $h);
    }
    else{
        echo "Winkel oder Höhe muss gegeben sein! <br>";
        return;
    }

    if($R < $r){
        echo "<br> <b> Der Radius der Grundfläche sollte größer als der Radius der Deckfläche sein, andernfalls ist der Kegel gedreht. Höhe oder Winkel könnten negativ sein. </b> <br>";
    }

    $Volumen = Volumen($R, $r, $h);
    $Mantellinie = Mantelline($R, $r, $h);
    $Mantelfläche = Mantelfläche($R, $r, $Mantellinie);
    $Deckfläche = Fläche($r);
    $Grundfläche = Fläche($R);
    $Oberfläche = Oberfläche($R, $r, $Mantellinie);

    echo "<br> Mithilfe der Radii R: <b>" .$R. "</b> und r: <b>" .$r. 
         "</b>, der Höhe h: <b>" .round($h * 100) / 100 . 
         "</b> und dem Winkel phi: <b>" . round($phi * 100) / 100 . "°</b> <br>";

    echo "<br> 
        <table class='results'> 
            <tr>
                <td> Volumen</td><td>" .round($Volumen)."</td> 
            </tr>
            <tr>
                <td> Mantelfläche</td><td>" .round($Mantelfläche)."</td> 
            </tr>
            <tr>
                <td> Deckfläche</td><td>" .round($Deckfläche)."</td> 
            </tr>
            <tr>
                <td> Grundfläche</td><td>" .round($Grundfläche)."</td> 
            </tr>
            <tr>
                <td> Oberfläche</td><td>" .round($Oberfläche)."</td> 
            </tr>
        </table>";

    echo "";

    //Breite der Canvas
    $breite = 1300;
    
    $halbeBreite = $breite / 2;
    $zentelBreite = $breite / 10;

    $h += $zentelBreite;    //Add 50 to offset from Canvas Border
    $ry = $r / 5;           //Calculate a y Radius for the Ellipse

    //Calculate the left Line Start and End Points
    $rox = $halbeBreite - $r;
    $roy = $zentelBreite;

    $rux = $halbeBreite - $R;
    $ruy = $h;

    //Calculate the right LIne Start and End Points
    $lox = $halbeBreite + $r;
    $loy = $zentelBreite;

    $lux = $halbeBreite + $R;
    $luy = $h;

    echo 
    '<svg height="'.$breite.'" width="'.$breite.'"> 
        <ellipse cx="'.$halbeBreite.'" cy="'. $h .'" rx="'.$R.   '" ry="'.$ry.'" stroke="black" stroke-width="3" fill="transparent"/>
        <ellipse cx="'.$halbeBreite.'" cy="'.$zentelBreite.'" rx="'.$r.         '" ry="'.$ry.'" stroke="black" stroke-width="3" fill="transparent"/>
        <line x1="'.$rox.'" y1="'.$roy.'" x2="'.$rux.'" y2="'.$ruy.'" style="stroke:black;stroke-width:3" />
        <line x1="'.$lox.'" y1="'.$loy.'" x2="'.$lux.'" y2="'.$luy.'" style="stroke:black;stroke-width:3" />
    </svg>';
?>