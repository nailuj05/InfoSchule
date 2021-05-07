<style type="text/css"> 
body{
    transform: rotate(-90deg); 
    text-align:center; 
}
</style>

<?php
    $height = 1; 

    while($height < 9)
    {
        $width = $height;

        while($width > 0){ 
            echo '*';       
            $width--;       
        }
        echo '<br>';
        $height++;
    }

    echo "N";

?>