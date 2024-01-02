<?php

namespace App\models;
require '../../vendor/autoload.php';
class AnnonceEntity
{
    private $id;
    private $image;
    private $prix;
    private $titre;
    private $description;
    private $dateAjout;
    private $bienId;

    public function __construct($id, $image, $prix, $titre, $description, $dateAjout, $bienId)
    {
        $this->id = $id;
        $this->image = $image;
        $this->prix = $prix;
        $this->titre = $titre;
        $this->description = $description;
        $this->dateAjout = $dateAjout;
        $this->bienId = $bienId;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getDateAjout()
    {
        return $this->dateAjout;
    }

    public function getBienId()
    {
        return $this->bienId;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function setImage($image){
        $this->image = $image;
    }
    public function setPrix($prix){
        $this->prix = $prix;
    }
    public function setTitre($titre){
        $this->titre = $titre;
    }
    public function setDescription($description){
        $this->description = $description;
    }
    public function setDateAjout($dateAjout){
        $this->dateAjout = $dateAjout;
    }

    public function setBienId($bienId){
        $this->bienId = $bienId;
    }
}
