<?php

namespace App\models;
require '../../vendor/autoload.php';
use App\dao\AnnonceDAO;

class AnnonceModel
{
    private $id;
    private $prix;
    private $titre;
    private $description;
    private $dateAjout;
    private $bienId;

    public function __construct($id,$prix, $titre, $description, $dateAjout, $bienId)
    {
        $this->id = $id;
        $this->prix = $prix;
        $this->titre = $titre;
        $this->description = $description;
        $this->dateAjout = $dateAjout;
        $this->bienId = $bienId;
    }

    public static function getAnnonceById($id)
    {
        return AnnonceDAO::getAnnonceById($id);
    }

    public static function getAllAnnonce()
    {
        return AnnonceDAO::getAllAnnonce();
    }

<<<<<<< HEAD
    public static function AddAnnonce($prix, $titre, $description, $dateAjout)
    {
        return AnnonceDAO::addAnnonce();
    }

    public static function DeletAnnonce()
    {
        return AnnonceDAO::deletAnnonce();
    }
     
    public static function UpdateAnnonce($prix, $titre, $description, $dateAjout)
    {
        return AnnonceDAO::UpdateAnnonce();
    }
=======
    // public function AddAnnonce($image, $prix, $titre, $description, $dateAjout)
    // {
    //     return AnnonceDAO::addAnnonce();
    // }

    // public function DeletAnnonce()
    // {
    //     return AnnonceDAO::deletAnnonce();
    // }
     
    // public function UpdateAnnonce($image, $prix, $titre, $description, $dateAjout)
    // {
    //     return AnnonceDAO::UpdateAnnonce();
    // }
>>>>>>> bf0dd6ba067f5b4a7df567ef5bdaca65488d15fb


}
