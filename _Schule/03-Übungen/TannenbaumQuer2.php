<?php
    $height = 1; 

    while($height <= 5)
    {
        $width = $height;
        
        while($width > 0){ 
            echo '*';       
            $width--;       
        }
        echo '<br>';

        $height += 2;
    }
    while($height > 0)
    {
        $width = $height;

        while($width > 0){ 
            echo '*';       
            $width--;       
        }
        echo '<br>';

        $height -= 2;
    }


?>