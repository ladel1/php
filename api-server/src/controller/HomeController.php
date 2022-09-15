<?php 

namespace App\Controller;

use App\Controller\AbstractController;
use App\Model\User;

class HomeController extends AbstractController{

    public function index(){  
        $title="Accueil";
        return $this->renderJson($title);       
    }

}