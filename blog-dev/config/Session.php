<?php 
namespace Config;

class Session{ 

    private $session;
    private static $instance;

    private function __construct()
    {
        session_start();
        $this->session = &$_SESSION;
    }

    public static function getInstance(){
        if(is_null(static::$instance)){
            static::$instance = new Session;
        }
        return static::$instance;
    }


    public function set($key,$value){
        $this->session[$key]=$value;
    }

    public function get($key){        
        return   (isset($this->session[$key]))?$this->session[$key] : false ;
    }

    public function destroy(){
        session_destroy();
        session_unset();        
    }

}
