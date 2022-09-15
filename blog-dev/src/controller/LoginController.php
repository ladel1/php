<?php 
namespace App\Controller;

use App\Crud\CRUDFactory;
use Helpers\Validator;
use root\Session;

class LoginController extends AbstractController{
    

    public function login($request){ 
                
        if( isset($request["email"]) &&
            isset($request["password"]) ){
                $email = Validator::checkEmail($request["email"]);
                $password = Validator::checkPassword($request["password"]);
                $user = CRUDFactory::getUserCRUD()->selectByEmail($email);           
                if(password_verify($password,$user->getPassword())){
                    $user->setPassword(":p");
                    $this->session()->set("user",$user);
                    // redirect
                    $this->redirect("dashboard");
                }
            }
        return $this->renderView("login/index");
    }

}