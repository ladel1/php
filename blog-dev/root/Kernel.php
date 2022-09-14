<?php 
    namespace Root;

    use Config\Router;

    class Kernel{

        public static function boot(){
            $datas = Router::route();
            extract($datas);
            require_once "src/view/base.php";
        }

    }