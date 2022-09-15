<?php 
namespace App\Controller;

use Exception;
use Helpers\Validator;

class RegisterController extends AbstractController{

    public function addUser($request){
        $error = "";
        if(
            isset($request["prenom"]) &&
            isset($request["nom"]) &&
            isset($request["email"]) &&
            isset($request["password"])
            ){
                try{
                    // validate fields
                    $nom = Validator::filterString($request["nom"],"Nom");
                    $prenom = Validator::filterString($request["prenom"],"Prenom");
                    $email = Validator::checkEmail($request["email"]);
                    $password = Validator::checkPassword($request["password"]);
                    // create user object

                    // insert user

                    // redirect to login
                }catch(Exception $e){
                    $error = $e->getMessage();
                }

            }

        return $this->renderView("register/index",compact("error"));
    }


}