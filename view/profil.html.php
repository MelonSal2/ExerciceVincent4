<!DOCTYPE html>
<html lang="en">
<head>
    <?php require "head.html.php"?>
    <title>Document</title>
</head>
<body>
    <?php require "navbar.html";?>
    <div>Adresse Mail : <?= $user->email?></div>
    <div>Prénom : <?= $user->prenom?></div>
    <div>Nom : <?= $user->nom?></div>

</body>
<?php require "script.html.php"?>
</html>