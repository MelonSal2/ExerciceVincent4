<?php

namespace Valarep\controller;

use Valarep\model\Boutique;
use Valarep\View;

class BoutiqueController{

    public static function boutique (){
        View::setTemplate('boutique');
        View::display();
    }

    public static function addboutique ($page,$nbrMasque){
        $idUser = (int)$_SESSION['user']->id;
        var_dump($idUser);
        Boutique::addboutique($nbrMasque, $idUser);
    }
    
}