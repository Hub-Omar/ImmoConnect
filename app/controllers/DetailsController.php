<?php

namespace App\controllers;

require_once '../../vendor/autoload.php';
use App\models\AnnonceModel;
use App\models\CommentModel;

class DetailsController
{
    public function details()
    {
        $annonceId = 1;
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
}
