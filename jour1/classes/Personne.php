<?php 

namespace App\Classe;

use PDO;

 class Personne{

    private $bdd = "1ere Connexion";
    public $firstname;
    protected $lastname;
    private $age;


    function __construct($firstname="",$lastname="",$age=null)
    {
        $this->setFirstname($firstname);
        $this->setLastname($lastname)   ;   
        $this->setAge($age);
    }

    function __sleep()
    {
        return array("firstname","lastname","age");
    }

    function __wakeup()
    {
        $this->bdd = "2eme connexion";
    }


    function __toString()
    {
        return "Prénom: $this->firstname <br>Nom: $this->lastname <br>Age: $this->age";
    }

    function setAge($age){
        if($age<=13){
            throw new \Exception("L'age doit etre sup à 13");           
        }
        $this->age=$age;
        return $this;
    }
    function getAge(){
        return $this->age;
    }

    function setFirstname($firstname){
        $this->firstname=$firstname;
        return $this;
    }
    function getFirstname(){
        return $this->firstname;
    }
    function setLastname($lastname){
        $this->lastname=$lastname;
        return $this;
    }
    function getLastname(){
        return $this->lastname;
    }


}