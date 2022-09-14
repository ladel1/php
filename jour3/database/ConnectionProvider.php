<?php

    namespace Database;

    use Helpers\ReadFile;

    class ConnectionProvider{// singleton
        // instance of singleton ConnectionProvider
        private static $instance = null;
        // instance of PDO
        private $instancePDO = null;
        // private construct for singleton 
        private function __construct(){
            try{
                $datas = ReadFile::readJson("database.json");
                $dsn = $datas["url"].";dbname=".$datas["dbname"];                
                $this->instancePDO = new \PDO($dsn,$datas["username"],$datas["password"]);                
            }catch(\PDOException $e){
                echo "Error ".$e->getMessage();
            }
        }
        // 
        public function getConnection(){
            return $this->instancePDO;
        }
        // check if instance is null before instantiate ConnectionProvider
        public static function getInstance(){
            if(is_null(self::$instance)){
                self::$instance = new ConnectionProvider();
            }
            return  self::$instance;
        }

    }