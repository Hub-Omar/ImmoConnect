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

    public function __construct($id, $prix, $titre, $description, $dateAjout, $bienId)
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
    // public static function AddAnnonce($prix, $titre, $description, $dateAjout)
=======
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
    // public function AddAnnonce($image, $prix, $titre, $description, $dateAjout)
>>>>>>> c097b55a3e98b7a1ab09237b6f99d0cd7268e41e
    // {
    //     return AnnonceDAO::addAnnonce();
    // }

    // public static function DeletAnnonce()
    // {
    //     return AnnonceDAO::deletAnnonce();
    // }
<<<<<<< HEAD
     
    // public static function UpdateAnnonce($prix, $titre, $description, $dateAjout)
    // {
    //     return AnnonceDAO::UpdateAnnonce();
    // }

=======

    // public function UpdateAnnonce($image, $prix, $titre, $description, $dateAjout)
    // {
    //     return AnnonceDAO::UpdateAnnonce();
    // }
>>>>>>> c097b55a3e98b7a1ab09237b6f99d0cd7268e41e


}
