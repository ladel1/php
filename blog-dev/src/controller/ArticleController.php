<?php 

    namespace App\Controller;

    class ArticleController extends AbstractController{

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

            return $this->renderView("article/add-article");
        } 

        public function deleteArticle($request){
           
            if(isset($request["sup"])){
                define("DELETE_ARTICLE","
                    DELETE FROM articles WHERE id = {$request["sup"]}            
                ");
                $rowcount = $this->db->exec(DELETE_ARTICLE);  
            }
        }

    }