<?php
// Main
use Config\Router;
require_once "__autoload__.php";
//$db = ConnectionProvider::getInstance()->getConnection();
$content = Router::route();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Css -->
    <!-- javascript -->
    <title>Accueil</title>
</head>
<body>

<?=$content ?>

<!-- Javascript -->
</body>
</html>
