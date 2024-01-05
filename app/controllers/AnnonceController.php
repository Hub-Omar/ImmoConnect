<?php

namespace app\controllers;
use App\models\AnnonceModel;
require '../../vendor/autoload.php';


class Annoncecontroller{

    public function add(){
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {

            $prix = $_POST['prix'];
            $titre = $_POST['titre'];
            $description = $_POST['description'];
            $dateAjout = $_POST['date'];  
    
            $Annonce= new AnnonceModel($prix, $titre, $description, $dateAjout);
            $Annonce->AddAnnonce();
        }
    }


}






?>