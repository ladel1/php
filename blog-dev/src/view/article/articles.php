<h1>Articles</h1>

<?php foreach($articles as $val): ?>
    <p> <?=  $val->titre ?> <?= $val->contenu ?> </p>
<?php endforeach; ?>    