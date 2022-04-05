<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 *@Entity @Tables(name="User")
 **/
class User
{
 /** @Id @column(type=integer) @Generatedvalue **/
private $id;
/**@column(type=string) **/
private $nom;
/**@column(type=string) **/
private $prenom;
/**@column(type=string) **/
private $email;
/**@column(type=string) **/
private $password;
/**
     * One user has many lieux. This is the inverse side.
     * @OneToMany(targetEntity="Lieu", mappedBy="user")
     */
private $lieux;
 /**
     * Many Users have Many Roles.
     * @ManyToMany(targetEntity="Roles", inversedBy="users")
     * @JoinTable(name="users_roles")
     */
private $roles;

public function __construct() 
{
    $this->lieux = new ArrayCollection();
    $this->roles = new ArrayCollection();

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

public function getprenom()
{
    return $this->prenom;
}
public function setprenom($prenom)
{
    $this->prenom=$prenom;
}

public function getemail()
{
    return $this->email;
}

public function setemail($email)
{
     $this->email=$email;
}
public function getpassword()
{
    return $this->password;
}
public function setpassword($password)
{
    $this->password=$password;
}
public function getlieux()
{
    return $this->lieux;
}

public function setlieux($lieux)
{
     $this->lieux=$lieux;
}
public function getroles()
{
    return $this->roles;
}

public function setroles($roles)
{
     $this->roles=$roles;
}
}
