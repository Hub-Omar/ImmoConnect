<?php

namespace App\controllers;

require_once '../../vendor/autoload.php';
use App\models\AnnonceModel;
use App\models\CommentModel;

class DetailsController
{
    public function details()
    {
        $annonceId = 2;
        $annonce = AnnonceModel::getAnnonceById($annonceId);
        $comments = CommentModel::getCommentsByAnnonceId($annonceId);

        $this->detailsView($annonce, $comments);
    }

    private function detailsView($annonce, $comments)
    {
        include '../../views/user/details/details.php';
        exit();
    }
}
