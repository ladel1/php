<?php 
    namespace Root;

    use Config\Router;

    class Kernel{

        public static function boot(){
            $contextPath = "/php/api-server";        
            $datas = Router::route();
            
            // echo 
        }

    }