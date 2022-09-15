<?php 

namespace App\Controller;

use App\Controller\AbstractController;

class HomeController extends AbstractController{

    public function index(){              
        return $this->renderJson();       
    }

}