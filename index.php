<?php
namespace Valarep;
// inclusion des classes externes
use Valarep\controller\HomeController;
use Valarep\controller\UtilisateurController;
use Valarep\controller\BoutiqueController;


// Chargement automatique des classes
require_once "vendor/autoload.php";


session_start();
// début de l'application web

// récupération de la variable transmise par GET
// est ce qu'on a cliqué sur le navbar ?
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    // page par défaut
    $page = 'home';
}

switch ($page) {
    case 'user':
        $id = (int)$_GET['id'];
        UtilisateurController::profilUser($page, $id);
        break;
    case 'home':
        HomeController::home($page);
        break;
    
    case 'inscription':
        UtilisateurController::Pageinscription($page);
        break;
    case 'addboutique':
        $nbrMasque = (int)$_POST['nbrMasque'];
        BoutiqueController::addboutique($page, $nbrMasque);
        break;
    case 'addUser':
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $adresse = $_POST['adresse'];
        $nbrFoyer = $_POST['nbrFoyer'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        UtilisateurController::addUser($page,$prenom, $nom, $adresse, $nbrFoyer, $email, $password);
        UtilisateurController::PageAddUser($page);
        break;
    case 'utilisateur':
        UtilisateurController::PageUtilisateur($page);
        break;
    case 'connexion':
        UtilisateurController::Pageconnexion($page);
        break;
    case 'signIn':
        $email = $_POST['email'];
        $password = $_POST['password'];
        UtilisateurController::signIn($page,$email,$password);
        UtilisateurController::PagesignIn($page);
        break;
    case 'boutique':
        BoutiqueController::boutique($page);
        break;
    default:
        //todo: ERREUR 404
        break;
}
