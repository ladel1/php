<?php 
namespace App\Controller;

use App\Crud\CRUDFactory;
use App\Model\User;
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
                    $user = new User;
                    $user->setPrenom($prenom)
                         ->setNom($nom)   
                         ->setEmail($email)
                         ->setPassword(password_hash($password,PASSWORD_DEFAULT))
                         ->setIp(password_hash($_SERVER['REMOTE_ADDR'],PASSWORD_DEFAULT))
                         ->setUserAgent(password_hash($_SERVER['HTTP_USER_AGENT'],PASSWORD_DEFAULT));
                    // insert user
                    $rowCount = CRUDFactory::getUserCRUD()->insert($user);
                    // redirect to login
                    header("Location:login");
                }catch(Exception $e){
                    $error = $e->getMessage();
                }

            }

        return $this->renderView("register/index",compact("error"));
    }


}