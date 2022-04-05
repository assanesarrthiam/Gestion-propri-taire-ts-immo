<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity
 * @ORM\Table(name="Lieu")
 **/
class Lieu
{
/** @Id @column(type=integer) @Generatedvalue **/
private $id;
/**@column(type=string) **/
private $nom;
/**@column(type=decimal) **/
private $longitude;
/**@column(type=decimal) **/
private $latitude;
  /**
     * One lieu has many formations. This is the inverse side.
     * @OneToMany(targetEntity="Formation", mappedBy="lieu")
     */
private $formations;
/**
     * Many Lieux have one user. This is the owning side.
     * @ManyToOne(targetEntity="User", inversedBy="lieux")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
private $users;

public function __construct() {
    $this->formations = new ArrayCollection();
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

public function getlongitude()
{
    return $this->longitude;
}

public function setlongitude($longitude)
{
    $this->longitude=$longitude;
}

public function getlatitude()
{
    return $this->latitude;
}
public function setlatitude($latitude)
{
    $this->latitude=$latitude;
}

public function getformations()
{
    return $this->formations;
}

public function setformations($formations)
{
     $this->formations=$formations;
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
