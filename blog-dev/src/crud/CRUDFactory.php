<?php 


    namespace App\Crud;

    class CRUDFactory{


        public static function getArticleCRUD(){
            return new ArticleCRUD();
        } 


    }