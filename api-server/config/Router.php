<?php
    namespace Config;

use Helpers\ReadFile;

    class Router{

        public static function guardian($routes,$page){
            if(isset($routes[$page][2]) && $routes[$page][2]==="guard"){
                $user = Session::getInstance()->get("user");
                if(!$user){
                    header("Location:login");
                }
            }
        }

        public static function route(){
            $routes=ReadFile::readJson("routes.json");
            $page = (isset($_GET["page"]))? $_GET["page"] : "";
            self::guardian($routes,$page);
            $controlerName=$routes[$page][0];
            $methodName=$routes[$page][1];                
            $instanceController = new $controlerName();
            return $instanceController->$methodName($_REQUEST);
        }

    }