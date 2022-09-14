<?php 

    namespace App\Crud;

    class ArticleCRUD extends CRUD{

        public function insertArticle($article){
            define("INSERT_ARTICLE","INSERT INTO articles (titre,contenu,auteur) 
            VALUES ('{$article->getTitre()}','{$article->getContenu()}',{$article->getAuteur()});            
                ");
            $rowcount = $this->db->exec(INSERT_ARTICLE);
        }

    }