<?php 
    $firstname=$lastname="";
    $jours = [
        "Lundi","Mardi","Mercredi","Jeudi","Vendredi","Dimanche"
    ];
    if(
        isset($_POST["firstname"]) &&
        isset($_POST["lastname"]) &&
        isset($_POST["day"])
        ){

            $_POST = filter_var_array($_POST,FILTER_SANITIZE_STRING);
            
            $filter_string = array(
                'filter'=> FILTER_VALIDATE_REGEXP,
                "options"=> array("regexp"=>"#^[a-zA-Z0-9\-]*$#")
            );

            $filter = array(
                "firstname"=> $filter_string,
                "lastname"=> $filter_string,
                "day"=> $filter_string
            );

            $datas = filter_var_array($_POST,$filter);

            extract($datas);



        }