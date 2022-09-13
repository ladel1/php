<?php require_once "calcul.php";  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Mini Calculatrice</title>
</head>
<body>
    <h1>Mini Calculatrice</h1>
    <form action="" method="get">
        <div class="form-control">
            <input type="number" name="op1" value="<?=$op1?>" id="">
        </div><br>
        <div class="form-control">
            <select name="op" id="">
                <?php foreach($operations as $key => $val): ?>
                    <option><?=$key?></option>
                <?php endforeach; ?>    
            </select>
        </div><br>
        <div class="form-control">
            <input type="number" name="op2" value="<?=$op2?>" id="">
        </div> <br>  
        <button type="submit">=</button>     
    </form>
    <br><br>
    <div class="result">
        <span>Résultat: <?=$result?></span>
    </div>                    

</body>
</html>