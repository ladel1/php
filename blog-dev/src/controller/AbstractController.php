<?php 

    namespace App\Controller;
    abstract class AbstractController{

        protected function renderView($templatename,$params=[]){
            ob_start();
            extract($params);
            require_once "src/view/$templatename.php";
            $html = ob_get_contents();
            ob_clean();
            return $html;
        }

    }