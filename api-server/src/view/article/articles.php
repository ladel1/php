<h1>Articles</h1>

<?php foreach($articles as $val): ?>
    <span> <?=  $val->getTitre() ?> <?= $val->getContenu() ?> </span>
    <form action="delete-article" method="post">
        <button type="submit" name="supprimer" value="<?=$val->id?>" >Supprimer</button>
    </form>
    <br>
<?php endforeach; ?>    