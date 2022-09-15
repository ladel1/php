<?php
namespace App\Crud;

use App\Model\User;
class UserCRUD extends CRUD{

    public function insert(User $user){      
        define("INSERT_USER","
                    INSERT INTO `users`( `prenom`, `nom`, `email`, `password`, `ip`, `user_agent`) 
                    VALUES (:prenom,:nom,:email,:password,:ip,:userAgent)
        ");
        $stmt = $this->db->prepare(INSERT_USER);
        $stmt->bindValue(":prenom",$user->getPrenom());
        $stmt->bindValue(":nom",$user->getNom());
        $stmt->bindValue(":email",$user->getEmail());
        $stmt->bindValue(":password",$user->getPassword());
        $stmt->bindValue(":ip",$user->getIp());
        $stmt->bindValue(":userAgent",$user->getUserAgent());
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function selectByEmail($email):User{
        define("SELECT_USER","SELECT * FROM users WHERE email = :email");        
        $stmt = $this->db->prepare(SELECT_USER);
        $stmt->bindValue(":email",$email);        
        $stmt->execute();
        return $stmt->fetchObject(User::class);
    }

}