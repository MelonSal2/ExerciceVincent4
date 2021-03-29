<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require "head.html.php" ?>
    <title>Document</title>
</head>
<body>
    <?php require "navbar.html" ?>
    <div class="w-100 d-flex flex-column align-items-center">
        <h1>Liste des Utilisateurs</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>NBR Foyer</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user):?>
                    <tr>
                        <td><?= $user->prenom ?></td>
                        <td><?= $user->nom ?></td>
                        <td><?= $user->adresse ?></td>
                        <td><?= $user->nbrfoyer ?></td>
                        <td><?= $user->email ?></td>
                        <td><a href="?page=user&id=<?=$user->id?>" class="btn btn-primary mt-3">Info</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            
        </table>
    </div>
</body>
<?php require "script.html.php"?>
</html>