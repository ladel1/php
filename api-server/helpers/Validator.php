<?php 
namespace Helpers;

class Validator{

    public static function filterString($field,$msg){
        $str = htmlspecialchars($field);
        if(empty($str)){
            throw new \Exception("Le champs $msg est obligatoire");
        }
        return $str;
    }

    public static function checkEmail($field){
        $email = filter_var($field,FILTER_SANITIZE_EMAIL);
        if(empty($email)) throw new \Exception("Le champs E-mail est obligatoire");
        $email = filter_var($email,FILTER_VALIDATE_EMAIL);
        if(!$email) throw new \Exception("La syntaxe E-mail est incorrect");
        return $email;
    }

    public static function checkPassword($field){
        $options = array(
            "options"=>array(
                "regexp"=>"#^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$#"
            )
        );
        $password = filter_var($field,FILTER_VALIDATE_REGEXP,$options);
        if(!$password) throw new \Exception("Le mot de passe doit contenir au moins 8 caracteres");
        return $password;
    }

}