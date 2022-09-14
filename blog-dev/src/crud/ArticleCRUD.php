<?php 

    namespace App\Crud;

    use App\Model\Article;

    class ArticleCRUD extends CRUD{

        public function insertArticle($article){
            define("INSERT_ARTICLE","INSERT INTO articles (titre,contenu,auteur) 
            VALUES ('{$article->getTitre()}','{$article->getContenu()}',{$article->getAuteur()});            
                ");
            $rowcount = $this->db->exec(INSERT_ARTICLE);
        }

        public function selectAll(){
            define("SELECT_ARTICLES","SELECT * FROM articles");
            $stmt = $this->db->prepare(SELECT_ARTICLES);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_CLASS|\PDO::FETCH_PROPS_LATE,Article::class);
        }

    }