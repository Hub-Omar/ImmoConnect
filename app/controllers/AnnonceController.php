<?php

namespace app\controllers;
require '../../vendor/autoload.php';


class AnnonceController{



    public function annonce()
    {
        include '../../views/annonce/annonce.php';
        exit();
    }
    // public function add(){


    //    if(isset($_POST['submit']))
    //      {
    //         $Annonce= new AnnonceModel($prix, $titre, $description, $date_ajout);
    //         $Annonce->AddAnnonce();

    //      }


    // }

    






}






?>