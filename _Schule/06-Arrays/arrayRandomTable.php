<style type="text/css"> 
table, th, td{
    border: 1px solid black; 
    border-collapse: collapse;
}
</style>

<?php
    $feld = array();

    for($i =  0; $i < 10; $i++){
        $zufall = rand(0, 100);
        $feld[$i] = $zufall;
    }

    echo '<table style="width=100%">';
    for($i =  0; $i < 10; $i++){
        echo "<tr> <td>" . $feld[$i] . "</td> </tr>";
    }
    echo "</table>";
?>