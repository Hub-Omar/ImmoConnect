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

    public function signup()
    {
        include '../../views/auth/signUp.php';
        exit();
    }


    public function saveComment()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
            $commentText = $_POST['comment'];
            $userId = 1;
            $annonceId = 2;
    
            CommentModel::saveComment($commentText, $userId, $annonceId);
            header("Location:details");
            exit();
        }
    }
    
    

    private function detailsView($comments)
    {
        include '../../views/user/details/details.php';
        exit();
    }

    public function getComments()
    {
        $annonceId = 2;
        $comments = CommentModel::getCommentsByAnnonceId($annonceId);

        include '../../views/user/details/details.php';
        exit();
    }
}