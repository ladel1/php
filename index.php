<?php 
    require_once "module1.php";
?>
<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titre ?></title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <?php foreach($menu as $val):  ?>
                <li><a href="">
                    <?= $val ?>
                </a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>
    <main></main>
    <footer></footer>
</body>
</html>