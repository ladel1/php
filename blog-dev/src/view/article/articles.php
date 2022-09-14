<h1>Articles</h1>

<?php foreach($articles as $val): ?>
    <p> <?=  $val->getTitre() ?> <?= $val->getContenu() ?> </p>
<?php endforeach; ?>    