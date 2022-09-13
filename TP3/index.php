<?php
    require_once "Form2.php";
    $form = new Form2("/","POST","Ajout de l'utilisateur");
    $form->setText("Prénom","prenom");
    $form->setText("Nom","nom");
    $form->setText("Adresse","addr");
    $form->setLabel("Civilité");
    $form->setRadio("F","F","civilite");
    $form->setRadio("M","M","civilite");
    $form->setSubmit("ajouter","Ajouter utilisateur");    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP3</title>
</head>
<body>
    <h1>TP3</h1>
    <?=$form->getForm();?>
    <?= htmlentities("<a>sdfsdf</a>") ?>
</body>
</html>