<?php
    namespace Config;

use Helpers\ReadFile;

    class Router{

        public static function route(){
            $routes=ReadFile::readJson("routes.json");
            $page = (isset($_GET["page"]))? $_GET["page"] : "";
            $controlerName=$routes[$page][0];
            $methodName=$routes[$page][1];                
            $instanceController = new $controlerName();
            return $instanceController->$methodName($_REQUEST);
        }

    }