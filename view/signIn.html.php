<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require "head.html.php" ?>
    <title>Connexion Correct</title>
</head>
<body>
    <?php require "navbar.html" ?>
    <div class="w-100 d-flex flex-column align-items-center">
        <?php if(isset($_SESSION['user']->prenom)){ ?>

        <h1>Connexion réussis, Salut <?=$_SESSION['user']->prenom?></h1>

        <?php } else { ?>

        <h1>Votre Email ou Mot de passe n'est pas correct</h1>

        <?php } ?>
        
    </div>
</body>
<?php require "script.html.php"?>
</html>