<?php
namespace src\controller;
use libs\system\Controller;
use src\model\Proprietairedb;

class Proprietairecontroller extends Controller
{
    public function add()
    {
        return $this->view->load("proprietaire/add");
    }

    public function getAll()
    {
        $Proprietaire_dao = new Proprietairedb();
        $Proprietaire = $Proprietaire_dao->findAll();//array("ROLE_USER","ROLE_ADMIN");
        return $this->view->load("Proprietaire/getAll", $Proprietaire);
    }
}
?>