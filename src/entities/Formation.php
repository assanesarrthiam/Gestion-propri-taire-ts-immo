<?php
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="formation")
 **/
class Formation
{
 /** @Id @column(type=integer) @Generatedvalue **/
private $id;
/**@column(type=string) **/
private $nom;
/**@column(type=string) **/
private $date;
/**@column(type=integer) **/
private $duree;
 /**
     * Many formations have one lieu. This is the owning side.
     * @ManyToOne(targetEntity="Lieu", inversedBy="formations")
     * @JoinColumn(name="lieu_id", referencedColumnName="id")
     */
private $lieu;

public function __construct()
 {

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
public function getdate()
{
    return $this->date;
}

public function setdate($date)
{
    $this->date=$date;
}
public function getduree()
{
    return $this->duree;
}

public function setduree($duree)
{
    return $this->duree;
}
public function getlieu()
{
    return $this->lieu;
}

public function setlieu($lieu)
{
     $this->lieu=$lieu;
}
}
