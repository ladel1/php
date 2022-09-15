<?php 

namespace App\Controller;

use App\Controller\AbstractController;

class HomeController extends AbstractController{

    public function index(){
        
        $title = "Accueil";
        return $this->renderView("home/index",[
            "title"=>$title
        ],"Accueil");        
    }

}