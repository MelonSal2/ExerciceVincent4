<!DOCTYPE html>
<html lang="en">
<head>
    <?php require "head.html.php"?>
    <title>Document</title>
</head>
<body>
    <?php require "navbar.html"?>
    <div>Adresse Mail : <?= $user->email?></div>
    <div>Prénom : <?= $user->prenom?></div>
    <div>Nom : <?= $user->nom?></div>

    <div><h1>Vos commandes :</h1></div>

    <?php foreach($commandeUser as $commandeUsers): ?>

        <div><h6>Commande numéro : <?=$commandeUsers->id?></h6>, Vous avez acheter <?=$commandeUsers->nbrMasque?> Masques</div>

    <?php endforeach;?>
</body>
<?php require "script.html.php"?>
</html>