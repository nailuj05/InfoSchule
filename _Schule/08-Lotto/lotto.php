<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotto</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
    
    <style>
        @import url('./main.css');
    </style>
</head>
<body>
    <h1>Lotto</h1>
    <div>
</body>
</html>

<?php
    require 'functions.php';

    $lottozahlen = RandArray();

    $lottozahlen = BubbleSort($lottozahlen);

    echo '<section class="num-grid">';
    for ($i=0; $i < count($lottozahlen); $i++) { 
        echo '<div class="card">'.$lottozahlen[$i].'</div>';
    }
    echo '</section>';

    echo '
    <div class="button-div">
        <form>
            <input type="submit" class="button" value="Ziehen"/>
        </form>
    </div> 
    </div>';
?>