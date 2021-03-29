<?php

namespace Valarep\controller;

use Valarep\model\Utilisateur;
use Valarep\View;

class UtilisateurController{

    public static function Pageinscription (){
        $posts = Utilisateur::getAll();
        View::setTemplate('inscription');
        View::bindVariable('$posts', $posts);
        View::display();
    }

    public static function addUser($page,$prenom, $nom, $adresse, $nbrFoyer, $email, $password){
        Utilisateur::inscription($prenom, $nom, $adresse, $nbrFoyer, $email, $password);
    }

    public static function signIn($page,$email, $password){
        $user = new Utilisateur();
        $userConnect = $user->signIn($email,$password);
        $_SESSION['user'] = $userConnect;
    }

    public static function profilUser($page, int $id){
        $user = Utilisateur::findById($id);
        $commandeUser = Utilisateur::findCommandeById($id);
        View::setTemplate('profil');
        View::bindVariable("user",$user);
        View::bindVariable("page",$page);
        View::display();
    }

    public static function PagesignIn (){
        View::setTemplate('signIn');
        View::display();
    }

    public static function PageAddUser (){
        View::setTemplate('addUser');
        View::display();
    }

    public static function Pageconnexion(){
        View::setTemplate('connexion');
        View::display();
    }

    public static function PageUtilisateur (){
        $users = Utilisateur::getAll();
        View::setTemplate('listeUtilisateur');
        View::bindVariable("users", $users);
        View::display();
    }
}