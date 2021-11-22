<?php
    function IsNumInArray($array, $num){
        if(count($array) == 0){
            return false;
        }

        for($i = 0; $i < count($array); $i++){
            if($array[$i] == $num){
                return true;
            }
        }
        return false;
    }

    function RandArray(){
        $lottozahlen = array();

        while(count($lottozahlen) < 6){
            $rand = rand(1, 49);

            if(!IsNumInArray($lottozahlen, $rand)){
                $lottozahlen[] = $rand;
            }
        }
        return $lottozahlen;
    }

    function IsArraySorted($array){
        $lastElement = $array[0];
        $currentElement = null;

        for($i = 1; $i < count($array); $i++){
            $currentElement = $array[$i];

            if($lastElement > $currentElement){
                return false;
            }
            $lastElement = $currentElement;
        }
        return true;
    }

    function BubbleSort($array){
        while(!IsArraySorted($array))
        {
            for ($i = 1; $i < count($array); $i++) { 
                $curr = $array[$i];
                $last = $array[$i - 1];

                if($last > $curr){
                    $array[$i] = $last;
                    $array[$i - 1] = $curr;
                }
            }
        }

        return $array;
    }
?>