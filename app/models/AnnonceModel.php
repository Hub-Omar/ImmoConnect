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

    public static function AddAnnonce($prix, $titre, $description, $dateAjout )
    {
        return AnnonceDAO::AddAnnonces($prix, $titre, $description, $dateAjout );
    }

    public static function DeletAnnonce($id)
    {
        return AnnonceDAO::deletAnnonce($id);
    }
     
    public static function UpdateAnnonce($prix, $titre, $description, $dateAjout)
    {
        return AnnonceDAO::UpdateAnnonce($prix, $titre, $description, $dateAjout);
    }
    


}
