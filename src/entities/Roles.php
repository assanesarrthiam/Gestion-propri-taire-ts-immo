<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 *@Entity @Tables(name="Roles")
 **/
class Roles
{
 /** @Id @column(type=integer) @Generatedvalue **/
private $id;
/**@column(type=string) **/
private $nom;
 /**
     * Many Roles have Many Users.
     * @ManyToMany(targetEntity="User", mappedBy="roles")
     */
private $users;

public function __construct() {
    $this->users = new ArrayCollection();
}
public function getid()
{
return $this->id;
 }
public function setid($id)
{
$this->id=$id;
}
public function getnom()
{
    return $this->nom;
}

public function setnom($nom)
{
    $this->nom=$nom;
}

public function getusers()
{
    return $this->users;
}
public function setusers($users)
{
    $this->users=$users;
}

}
