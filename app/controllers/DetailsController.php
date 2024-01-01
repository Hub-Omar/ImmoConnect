<?php

namespace App\controllers;

require_once '../../vendor/autoload.php';
use App\models\CommentModel;

class DetailsController
{

    public function details()
    {
            $annonceId = 2;
            $comments = CommentModel::getCommentsByAnnonceId($annonceId);
    
            $this->detailsView($comments);
        
    }
    
    

    private function detailsView($comments)
    {
        include '../../views/user/details/details.php';
        exit();
    }
}