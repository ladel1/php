<?php

    namespace Database;

    use Helpers\ReadFile;

    class ConnectionProvider{

        public static function getConnection(){
            try{
                $datas = ReadFile::readJson("database.json");
                $dsn = $datas["url"].";dbname=".$datas["dbname"];                
                return new \PDO($dsn,$datas["username"],$datas["password"]);                
            }catch(\PDOException $e){
                echo "Error ".$e->getMessage();
            }
        }

    }