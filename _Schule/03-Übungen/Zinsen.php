<?php
    $kapital = 1000;
    $zinsen = 5;
    $jahre = 3;

    for($i = $jahre; $i > 0; $i--)
    {
        $kapital += $kapital * ($zinsen / 100);
    }

    $kapital = round($kapital, 2);

    echo $kapital . "€";
?>