<?php

namespace app\controllers;
use App\models\AnnonceModel;
require '../../vendor/autoload.php';


class Annoncecontroller{



    public function add(){


       if(isset($_POST['submit']))
         {
            $Annonce= new AnnonceModel($prix, $titre, $description, $date_ajout);
            $Annonce->AddAnnonce();

         }


    }







}






?>