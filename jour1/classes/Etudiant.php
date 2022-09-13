<?php 

namespace App\Classe;

require_once "Personne.php";
require_once "./interfaces/Boursier.php";

class Etudiant extends Personne implements Boursier {

    private static $promo = "QCDA002P";
    private $address;

    public function __construct($firstname="",$lastname="",$age=null,
                                $address=""
        )
    {
        parent::__construct($firstname,$lastname,$age);// super()
        $this->setAddress($address);
    }

    public function setAddress($address){
        $this->address=$address;
        return $this;
    }
    public function getAddress(){
        return $this->address;
    }

    public static function setPromo($promo){
        self::$promo = $promo;
    }
    
    public static function getPromo(){
        return static::$promo;
    }

    public function __toString()
    {
        return parent::__toString()."<br>Adresse: $this->address";
    }

    public function parler(){
       
    }
    public function calculDroit(){

    }

}