<?php 

namespace App\Controller;
session_start();

use App\Controller\AbstractController;

class HomeController extends AbstractController{

    public function index(){
        
        //$_SESSION["user"] = "Adel";
        var_dump($_SESSION["user"]);
        $title = "xdcdvgbn,;:";
        return $this->renderView("home/index",[
            "title"=>$title,
            "name"=>"Adel"
        ]);        
    }

}