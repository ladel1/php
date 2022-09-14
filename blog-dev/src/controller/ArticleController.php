<?php 

    namespace App\Controller;

use App\Crud\ArticleCRUD;
use App\Model\Article;

    class ArticleController extends AbstractController{

        public function addArticle($request){

           
            if(isset($request["titre"]) && isset($request["contenu"])){
                $article = new Article($request["titre"],$request["contenu"],1);
                $articleCrud = new ArticleCRUD();
                $articleCrud->insertArticle($article);              
            }

            return $this->renderView("article/add-article");
        } 



        public function getArticles(){
            $articleCrud = new ArticleCRUD();
            $articles = $articleCrud->selectAll();         
            return $this->renderView("article/articles",compact("articles"));
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