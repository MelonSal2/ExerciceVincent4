<?php 
namespace Valarep\model;

use PDO;

class Boutique{
    public $id;
    public $nbrMasque;
    public $id_identifiant;

    public static function addboutique($nbrMasque, $idUser){
        var_dump($nbrMasque);
        var_dump($idUser);
        $dbh = dao::openDatabase();
        $query = "INSERT INTO `commande`(`nbrMasque`, `id_identifiant`) VALUES (:nbrMasque,:id_identifiant);";
        $sth = $dbh->prepare($query);
        $sth->bindParam(":nbrMasque", $nbrMasque);
        $sth->bindParam(":id_identifiant", $idUser);
        $sth->execute();
        dao::closeDatabase();
    }

}