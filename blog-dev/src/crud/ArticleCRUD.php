<?php 

    namespace App\Crud;

    use App\Model\Article;

    class ArticleCRUD extends CRUD{

        public function insert($article){
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

        public function delete($id){
            define("DELETE_ARTICLE","DELETE FROM articles WHERE id = :id ");
            $stmt = $this->db->prepare(DELETE_ARTICLE);
            $stmt->bindValue(":id",$id);
            $stmt->execute();
            return $stmt->rowCount();
        }

    }