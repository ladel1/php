<?php 
namespace App\Controller;

class LoginController extends AbstractController{
    

    public function login(){
        return $this->renderView("login/index");
    }

}