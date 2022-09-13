<?php

    require_once "__autoload__.php";

    use App\BO\Client;
    use App\BO\Voiture;
    use App\Controller\HomeController;

    $v = new Voiture("Bugatti","Veyron",420);
    $c = new Client("zertyu");
    $hc = new HomeController;
    
    echo $v;
    var_dump($c);
    var_dump($hc);
?>
<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 1</title>
</head>
<body>
    
</body>
</html>