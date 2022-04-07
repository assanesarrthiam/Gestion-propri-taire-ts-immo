<?php
require_once '../bootstrap.php';

$Proprietaire = new Proprietaire();
//$Proprietaire->setId(1);
$Proprietaire->setNom("Proprietaire user");

$entityManager->persist($Proprietaire);
$entityManager->flush();
 echo $Proprietaire->getId();
 ?>