<?php 
namespace App\Controller;

use App\Crud\CRUDFactory;
use Helpers\Validator;

class LoginController extends AbstractController{
    

    public function login($request){        
        if( isset($request["email"]) &&
            isset($request["password"]) ){
                $email = Validator::checkEmail($request["email"]);
                $password = Validator::checkPassword($request["password"]);
                $user = CRUDFactory::getUserCRUD()->selectByEmail($email);           
                if(password_verify($password,$user->getPassword())){
                    var_dump($user);
                }
            }
        return $this->renderView("login/index");
    }

}