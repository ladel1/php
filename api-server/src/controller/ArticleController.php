<?php 

    namespace App\Controller;

    use App\Crud\CRUDFactory;
    use App\Model\Article;

    class ArticleController extends AbstractController{

        public function addArticle($request){           
            if(isset($request["titre"]) && isset($request["contenu"])){
                $article = new Article($request["titre"],$request["contenu"],1);                
                CRUDFactory::getArticleCRUD()->insert($article);              
            }
            return $this->renderJson();
        } 

        public function getArticles(){
            $articles = CRUDFactory::getArticleCRUD()->selectAll();         
            return $this->renderJson();
        }

        public function deleteArticle($request){           
            if(isset($request["supprimer"])){
                $flag = CRUDFactory::getArticleCRUD()->delete($request["supprimer"]);
                // redirect in angular
            }
        }

    }