<?php 
    namespace Root;

    use Config\Router;

    class Kernel{

        public static function boot(){  
            header('Access-Control-Allow-Origin: *');
            header("Access-Control-Allow-Methods: GET, POST, DELETE, PUT, OPTIONS");     
            echo Router::route();
        }

    }