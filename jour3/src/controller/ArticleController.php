<?php 

    namespace App\Controller;

    class ArticleController{

        private $db;

        public function __construct()
        {
            $this->db = $GLOBALS["db"];
        }

        public function addArticle($request){

            if(isset($request["titre"]) && isset($request["contenu"])){
                define("INSERT_ARTICLE","INSERT INTO articles (titre,contenu,auteur) 
                                         VALUES ('{$request["titre"]}','{$request["contenu"]}',1);            
                 ");
                $rowcount = $this->db->exec(INSERT_ARTICLE);                
            }
        } 

    }