<?php 

    namespace Helpers;

use Exception;

    class ReadFile{

        public static function readJson($filename){
            if(file_exists($filename)){
                $json = file_get_contents($filename);
                // Decode the JSON file
                $json_data = json_decode($json,true);
                return $json_data;
            }else{
                throw new Exception("File dont exist");
            }
        }

    }