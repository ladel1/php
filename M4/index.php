<?php require_once "process.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <h1>Formulaire</h1>
    <form action="" method="post">
        <div class="form-control">
            <label for="">Firstname</label>
            <input type="text" name="firstname" value="<?=$firstname?>" id="">
        </div>
        <div class="form-control">
            <label for="">Lastname</label>
            <input type="text" value="<?=$lastname?>" name="lastname" id="">
        </div>   
        <div class="form-control">
            <label for="">Day: </label>
            <select name="day" id="">
                <?php foreach($jours as $jour): ?>
                    <option><?= $jour ?></option>
                <?php endforeach; ?>
            </select>
        </div>         
        <button type="submit">Ajouter</button>     
    </form>
</body>
</html>