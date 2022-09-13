<?php 

    $titre = "Blog Dev";
    global $titre;
    $menu = ["Home","Blog","Contact","About-us"];

    function afficher(){ 
        var_dump($GLOBALS["titre"] );
    }


    function add(float $a,float $b):float{
        return $a+$b;
    }
    function sub(int $a,int $b):int{
        return $a-$b;
    }    

    function operation($a,$b, $fn ){
        var_dump($fn($a,$b));
    }

    function is_email($email){
        $pattern="#^([a-zA-Z0-9\-\.]{3,})@[a-zA-Z0-9\-]{2,}\.[a-zA-Z]{2,6}$#";
        preg_match($pattern,$email,$matches);
        return $matches;
    }