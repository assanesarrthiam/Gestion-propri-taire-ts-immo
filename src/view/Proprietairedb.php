<?php
namespace src\model;
use libs\system\Model;
class Proprietairedb extends Model
{
    public function findAll()
    {
 return array("Proprietaire_Immeuble" ,"Proprietaire_Chambre") ;
    }
}
?>