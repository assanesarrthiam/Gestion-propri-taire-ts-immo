<?php
// src/proprietaire.php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="proprietaire")
 */
class proprietaire
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var int
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $Nom;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $Prenom;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $Sexe;
    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $Telephone;
    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $CNI;

    public function getId()
    {
        return $this->id;
    }

    public function setNom()
    {
        return $this->Nom;
    }

    public function setDescription($Nom)
    {
        $this->Nom = $Nom;
    }

    public function getPrenom()
    {
        return $this->Prenom;
    }

    public function getSexe()
    {
        return $this->Sexe;
    }

    public function setTelephone($Telephone)
    {
        $this->Telephone = $Telephone;
    }

    public function getCNI()
    {
        return $this->CNI;
    }
}
