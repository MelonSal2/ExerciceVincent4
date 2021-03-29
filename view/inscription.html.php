<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require "head.html.php" ?>
    <title>Inscription</title>
</head>
<body>
    <?php require "navbar.html" ?>





    <div class="w-100 d-flex flex-column align-items-center">
    <form method="post" action="?page=addUser" class="form-group" method="post">
        <label for="prenom">Prénom :</label>
        <input class="form-control" type="text" name="prenom" id="prenom">
        <label for="nom">Nom:</label>
        <input class="form-control" type="text" name="nom" id="nom">
        <label for="adresse">Adresse</label>
        <input class="form-control" type="text" name="adresse" id="adresse">
        <label for="nbrFoyer">Nombre de personnes dans le foyer</label>
        <input class="form-control" type="number" name="nbrFoyer" id="nbrFoyer">
        <label for="email">Email :</label>
        <input class="form-control" name="email" id="email" type="email">
        <label for="password">Mot de passe</label>
        <input class="form-control" type="text" name="password" id="password">

        <button id="inscriptionUtilisateur" name="inscriptionUtilisateur" class="btn btn-primary mt-3">S'inscrire</button>
    </form>
    </div>





    </div>
</body>
<?php require "script.html.php"?>
</html>