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

    public static function AddAnnonce($prix, $titre, $description, $dateAjout)
    {
        return AnnonceDAO::addAnnonce($prix, $titre, $description, $dateAjout);
    }

    public static function DeletAnnonce($id)
    {
        return AnnonceDAO::deleteAnnonce($id);
    }
     
    public static function UpdateAnnonce($prix, $titre, $description, $dateAjout)
    {
        return AnnonceDAO::UpdateAnnonce($prix, $titre, $description, $dateAjout);
    }
    
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    // // public static function AddAnnonce($prix, $titre, $description, $dateAjout)
    // public static function AddAnnonce($prix, $titre, $description, $dateAjout)
    // {
    //     return AnnonceDAO::addAnnonce();
    // }

    // public static function DeletAnnonce()
    // {
    //     return AnnonceDAO::deletAnnonce();
    // }

    // public static function UpdateAnnonce($prix, $titre, $description, $dateAjout)
    // {
    //     return AnnonceDAO::UpdateAnnonce();
    // }

>>>>>>> 3e62bd114998a11ca3714468e992324b6861b46f
>>>>>>> 5312a7bce068b21c52a1c2404a281b45748b7e59


}
