<?php 

    namespace App\BO;

    class Client{

        private $nom;

        function __construct($nom)
        {
            $this->nom = $nom;
        }

    }