<html>
<head>
    <title>ZinsenFormPost</title>
</head>
<body>
    <form method ="post" action="ZinsenFormPost.php">
        Kapital: <input type="text" name="betrag"/>
        Zinsen: <input type="text" name="prozentsatz"/>
        Jahre: <input type="text" name="jahre"/>
        <input type="submit" value="senden">
    </form>
</body>
</html>

<?php
    if (empty ($_POST['betrag']) != TRUE ) 
    {     
        //Eingabe
        $kapital = $_POST["betrag"];
        $prozentsatz = $_POST["prozentsatz"];
        $jahre = $_POST["jahre"];

        //Kaptial kleiner als 1000? -> Kapital = 1000
        if($kapital < 1000){
            $kapital = 1000;
        }

        //Kein Prozentsatz > 10;
        if($prozentsatz > 10){
            $prozentsatz = 10;
        }

        //Kleinerer Prozentsatz bei Kaptial > 100000
        if($kapital > 100000 && $prozentsatz > 1){
            $prozentsatz = $prozentsatz - 1;
        }

        //Zinsberechnung
        for($i = $jahre; $i > 0; $i--)
        {
            $kapital += $kapital * ($prozentsatz / 100);
        }

        //Kaptial runden
        $kapital = round($kapital, 2);

        //Ausgabe
        echo $kapital . "€";
    }
?>