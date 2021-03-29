<?php 
namespace Valarep\model;

use PDO;

class Utilisateur{
    
    public $id;
    public $prenom;
    public $nom;
    public $adresse;
    public $nbrfoyer;
    public $email;
    public $password;
    public $nbrMasque;

    public static function getAll() {
        $dbh = Dao::openDatabase();
        $query = "SELECT * FROM `utilisateur`";
        $sth = $dbh->prepare($query);
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS, "Valarep\\model\\Utilisateur");
        $items = $sth->fetchAll();
        Dao::closeDatabase();
        return $items;
    }

    public static function inscription(string $prenom, string $nom, string $adresse, string $nbrFoyer, string $email, string $password){
        $dbh = dao::openDatabase();
        $query = "INSERT INTO `utilisateur`(`prenom`,`nom`, `adresse`,`nbrfoyer`,`email`,`password`) VALUES (:prenom, :nom, :adresse, :nbrFoyer , :email, :password);";
        $sth = $dbh->prepare($query);
        $sth->bindParam(":prenom", $prenom);
        $sth->bindParam(":nom", $nom);
        $sth->bindParam(":adresse", $adresse);
        $sth->bindParam(":nbrFoyer", $nbrFoyer);
        $sth->bindParam(":email", $email);
        $sth->bindParam(":password", $password);
        $sth->execute();
        dao::closeDatabase();
    }

    public static function signIn(string $email, string $password){
        $dbh = Dao::openDatabase();
        $query = "SELECT * FROM `utilisateur` WHERE `email` = :email AND `password` = :password;";
        $sth = $dbh->prepare($query);
        $sth->bindParam(":email",$email);
        $sth->bindParam(":password",$password);
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS, "Valarep\\model\\Utilisateur");
        $item = $sth->fetch();
        Dao::closeDatabase();
        return $item;
    }

    public static function findById(int $id){
        $dbh = Dao::openDatabase();
        $query = "SELECT * FROM `utilisateur` WHERE `id` = :id;";
        $sth = $dbh->prepare($query);
        $sth->bindParam(":id", $id);
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS, "Valarep\\model\\Utilisateur");
        $item = $sth->fetch();
        Dao::closeDatabase();
        return $item;
    }
    public static function findCommandeById(int $id){
        $dbh = Dao::openDatabase();
        $query = "SELECT * FROM `commande` WHERE `id_utilisateur` = :id;";
        $sth = $dbh->prepare($query);
        $sth->bindParam(":id", $id);
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS, "Valarep\\model\\Utilisateur");
        $item = $sth->fetch();
        Dao::closeDatabase();
        return $item;
    }

}