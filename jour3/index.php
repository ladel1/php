<?php

    use App\Controller\ArticleController;
    use Database\ConnectionProvider;
    require_once "__autoload__.php";
    $db = ConnectionProvider::getInstance()->getConnection();
    global $db;
    // add article
    $articleController = new ArticleController;
    $articleController->addArticle($_REQUEST);
    // delete article
    $articleController->deleteArticle($_REQUEST);
    // get articles
    define("SELECT_ARTICLES","SELECT * FROM articles");
    $results = $db->query(SELECT_ARTICLES)->fetchAll();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Dev</title>
</head>
<body>
    <div class="forms">
        <form action="" method="post">
            <div class="form-control">
                <label for="titre">Titre:</label>
                <input type="text" name="titre" id="titre">
            </div>
            <div class="form-control">
                <label for="contenu">Contenu:</label>
                <textarea name="contenu" rows="6" cols="10" ></textarea>
            </div>
            <button type="submit">Ajouter article</button>            
        </form>
    </div>

    <?php foreach ($results as $key => $value): ?>
        <p> <b><?=$value["titre"]?></b> <?=$value["contenu"]?> 
        <form method="post"  > <button type="submit"  name="sup" value="<?=$value["id"]?>" >Supprimer</button> </form> </p>
    <?php endforeach; ?>
</body>
</html>
