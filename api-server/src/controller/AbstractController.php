<?php 

    namespace App\Controller;

    abstract class AbstractController{

        protected function renderJson($datas=""){
            // convert to json 
            return $datas;
        }


    }