<?php
namespace libs\system;


class Model
{
    protected $entityManager ;

    public function __construct()  
{
require_once "bootStrap.php";
$this->entityManager = $entityManager;
}
}
?>