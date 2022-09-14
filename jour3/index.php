<?php

    use Database\ConnectionProvider;
    require_once "__autoload__.php";
    $db = ConnectionProvider::getConnection();
    define("SELECT_ARTICLES","SELECT * FROM articles");
    $results = $db->query(SELECT_ARTICLES)->fetchAll();
    var_dump($results);

?>