<?php

namespace App\controllers;
require '../../vendor/autoload.php';
use App\models\CommentModel;

class CommentsController
{
    public function saveComment()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
            $commentText = $_POST['comment'];
            $userId = 1;
            $annonceId = 2;

            $commentModel = new CommentModel($commentText, $userId, $annonceId);
            $commentModel->saveComment();

            header("Location: details");
            exit();
        }
    }
}
