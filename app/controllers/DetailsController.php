<?php

namespace App\controllers;

require_once '../../vendor/autoload.php';
use App\models\AnnonceModel;
use App\models\CommentModel;
use App\DAO\AnnonceDAO;
class DetailsController
{
    public function details()
    {
        
        $annonceId = isset($_GET['annonceId']) ? $_GET['annonceId'] : 1;
        $annonce = AnnonceModel::getAnnonceById($annonceId);
        $all_annonce = AnnonceModel::getAllAnnonce();
        $comments = CommentModel::getCommentsByAnnonceId($annonceId);

        $this->detailsView($annonce, $all_annonce, $comments);
    }

    private function detailsView($annonce, $all_annonce,$comments)
    {
        include '../../views/user/details/details.php';
        exit();
    }

    public function bookNow()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $annonceId = base64_decode($_POST['annonceId']);

            $success = AnnonceDAO::updateStatut($annonceId, true);

            if ($success) {
                header('Location: details'); 
                exit;
            } else {
                echo 'Booking failed!';
            }
        }
    }
}
