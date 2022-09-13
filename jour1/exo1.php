<?php 

    function tirage($t){
        if($t<1000){
            for($tirage=0;rand(0,1000)!=$t;$tirage++);
            return $tirage;
        }
    }