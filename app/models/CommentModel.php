<?php

namespace App\models;
require_once '../../vendor/autoload.php';

use App\dao\CommentDAO;

class CommentModel
{
    public static function saveComment($comment, $userId, $annonceId)
    {
        CommentDAO::saveComment($comment, $userId, $annonceId);
    }

    public static function getCommentsByAnnonceId($annonceId)
    {
        return CommentDAO::getCommentsByAnnonceId($annonceId);
    }
}
