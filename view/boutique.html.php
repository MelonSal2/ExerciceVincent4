<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require "head.html.php" ?>
    <title>Boutique</title>
</head>
<body>
    <?php require "navbar.html" ?>
    <?php 
    
    if(isset($_SESSION['user'])){
    
    ?>
    <div class="w-100 d-flex flex-column align-items-center">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Masque</h5>
            <p class="card-text">Inscrivez ci-dessous le nombre de masque souhaitez, par nombre de personne dans votre foyer.</p>
            <form action="?page=addboutique" method="post">
            <input type="number" id="nbrMasque" name="nbrMasque">
            <button class="btn btn-primary mt-3">Acheter</button>
            </form>
        </div>
        </div>
    </div>

    <?php }else { ?>

        <h1>Vous devez vous connecter pour voir la boutique</h1>

    <?php } ?>
</body>
<?php require "script.html.php"?>
</html>