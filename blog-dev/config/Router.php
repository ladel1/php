<?php
    namespace Config;

use Helpers\ReadFile;

    class Router{

        public static function route(){
            if(isset($_GET["page"])){
                extract($_GET);
                $routes=ReadFile::readJson("routes.json");
                $controlerName=$routes[$page][0];
                $methodName=$routes[$page][1];
                
                $instanceController = new $controlerName();
                $instanceController->$methodName();

            }


        }

    }