<?php
namespace App\models;
require '../../vendor/autoload.php';

class UserEntity
{
    private $id;
    private $nom_complet;
    private $email;
    private $password;
    private $tel;
    private $profil;
    private $role_id;

     public function __construct($id, $nom_complet, $email, $password, $tel, $profil, $role_id) {
        $this->id=$id;
        $this->nom_complet=$nom_complet;
        $this->email=$email;
        $this->password=$password;
        $this->tel=$tel;
        $this->profil=$profil;
        $this->role_id=$role_id;
    }
    //////////////id/////////////////
    public function getId()
    {
      return $this->id;
    }
    public function setId($id)
    {
        $this->id=$id;
    }
   ////////nom_complet///////////
    public function getNom_complet()
    {
        return $this->nom_complet;
    }
    public function setNom_complet($nom_complet)
    {
         $this->nom_complet=$nom_complet;
    }
   /////////////email//////////////
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email=$email;
    }
    //////////password////////////
    public function getPassword()
    {
      return $this->password;
    }
    public function setPassword($password)
    {
        $this->password=$password;
    }
    ////////////tel///////////////
    public function getTel()
    {
        return $this->tel;
    }
    public function setTel($tel)
    {
        $this->tel=$tel;
    }
    /////////profil////////////////
    public function getProfil()
    {
        return $this->profil;
    }
    public function setProfil($profil)
    {
        $this->profil=$profil;
    }

    
}


































?>