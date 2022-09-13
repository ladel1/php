<?php 

    namespace App\BO;

    class Voiture{

        private $marque;
        private $modele;
        private $vitesseMaxi;

        function __construct($marque, $modele, $vitesseMaxi)
        {
            $this->marque=$marque;
            $this->modele=$modele;
            $this->vitesseMaxi=$vitesseMaxi;            
        }

        function __toString()
        {
            return "
                Marque: $this->marque   <br>
                Modele: $this->modele   <br>
                Vitesse Maxi: $this->vitesseMaxi   <br>
            ";
        }

    }