<?php 

    namespace App\Controller;
    abstract class AbstractController{

        protected function renderView($templatename,$params=[]){
            extract($params);
            require_once "src/view/$templatename.php";
        }

    }