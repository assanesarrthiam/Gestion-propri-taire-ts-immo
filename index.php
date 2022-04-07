<?php
require_once "config/autoload.php";
use src\controller\Proprietairecontroller;
$Proprietairedao = new Proprietairecontroller();
$Proprietairedao->add();
$Proprietairedao->getAll();
?>