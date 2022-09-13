<?php 

    $dsn = "mysql:host=localhost;dbname=eni_blog";
    try{
        $pdo = new PDO($dsn,"root","");
        echo "Connected to MySQL";
    }catch(PDOException $e){
        echo "Error ".$e->getMessage();
    }


?>