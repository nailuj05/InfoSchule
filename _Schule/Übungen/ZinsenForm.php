<html>
<body>
    <form method ="post">
        Kapital: <input type="text" name="kaptial"/>
        Zinsen: <input type="text" name="zinsen"/>
        Jahre: <input type="text" name="jahre"/>
        <input type="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"])){
        $kapital = (int)$_POST["kapital"];
        $zinsen = (int)$_POST["zinsen"];
        $jahre = (int)$_POST["jahre"];

        for($i = $jahre; $i > 0; $i--)
        {
            $kapital += $kapital * ($zinsen / 100);
        }
    
        $kapital = round($kapital, 2);
    
        echo $kapital . "€";
    }
?>