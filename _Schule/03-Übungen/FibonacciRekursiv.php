<?php
    echo Fibonacci(40);

    function fib($i){
        if($i <= 1){
            return 1;
        }
        else{
            return Fibonacci($i - 1) + Fibonacci($i - 2);
        }
    }

    function fibi($i){
        
    }
?>