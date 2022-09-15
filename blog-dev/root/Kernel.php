<?php 
    namespace Root;

    use Config\Router;

    class Kernel{

        public static function boot(){
            $contextPath = "/php/blog-dev";        
            $datas = Router::route();
            extract($datas);
            require_once "src/view/base.php";
        }

    }