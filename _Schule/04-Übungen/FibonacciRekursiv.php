<?php
    function fib($i){
        if($i <= 1){
            return 1;
        }
        else{
            return fib($i - 1) + fib($i - 2);
        }
    }

    function fibi($i){
        
    }

    echo fib(40);
?>