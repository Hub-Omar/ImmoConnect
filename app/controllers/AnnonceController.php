<?php

namespace app\controllers;
require '../../vendor/autoload.php';


class AnnonceController{



<<<<<<< HEAD
    public function annonce()
    {
        include '../../views/annonce/annonce.php';
        exit();
=======
    public function add(){


       if(isset($_POST['submit']))
         {
            $Annonce= new AnnonceModel($prix, $titre, $description, $date_ajout);
            $Annonce->AddAnnonce();

         }


>>>>>>> 8fe6cb5e897db4879325f21cb093b19886e8a71c
    }

    






}






?>