<?php 
    namespace Root;

    use Config\Router;

    class Kernel{

        public static function boot(){
            $datas = Router::route();
            $contextPath = "/php/blog-dev";
            extract($datas);
            require_once "src/view/base.php";
        }

    }