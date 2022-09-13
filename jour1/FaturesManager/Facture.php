<?php

namespace App\FacturesManger;
use App\Classe\Etudiant;

    class Facture{

        private $etudiant;

        public function __construct()
        {
            $this->etudiant = new Etudiant();
        }

    }

