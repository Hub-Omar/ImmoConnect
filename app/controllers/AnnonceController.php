<?php

namespace app\controllers;
require '../../vendor/autoload.php';


class AnnonceController{

<<<<<<< HEAD
    public function add(){
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {

            $prix = $_POST['prix'];
            $titre = $_POST['titre'];
            $description = $_POST['description'];
            $dateAjout = $_POST['date'];  
    
            $Annonce= new AnnonceModel($prix, $titre, $description, $dateAjout);
            $Annonce->AddAnnonce();
        }
=======


    public function annonce()
    {
        include '../../views/annonce/annonce.php';
        exit();
>>>>>>> 7e08b748e2b6de8cf8cc19f72fd83fdd2cf758dc
    }
    // public function add(){


<<<<<<< HEAD
=======
    //    if(isset($_POST['submit']))
    //      {
    //         $Annonce= new AnnonceModel($prix, $titre, $description, $date_ajout);
    //         $Annonce->AddAnnonce();

    //      }


    // }

    






>>>>>>> 7e08b748e2b6de8cf8cc19f72fd83fdd2cf758dc
}






?>