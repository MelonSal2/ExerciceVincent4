<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require "head.html.php" ?>
    <title>Connexion</title>
</head>
<body>
    <?php require "navbar.html" ?>





    <div class="w-100 d-flex flex-column align-items-center">
    <form method="post" action="?page=signIn" class="form-group" method="post">
        <label for="email">Email :</label>
        <input class="form-control" name="email" id="email" type="email">
        <label for="password">Mot de passe</label>
        <input class="form-control" type="text" name="password" id="password">

        <button class="btn btn-primary mt-3">Se connecter</button>
    </form>
    </div>





    </div>
</body>
<?php require "script.html.php"?>
</html>