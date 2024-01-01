<?php

namespace App\models;
require '../../vendor/autoload.php';
use App\dao\CommentDAO;

class CommentModel
{
    private $comment;
    private $userId;
    private $annonceId;

    public function __construct($comment, $userId, $annonceId)
    {
        $this->comment = $comment;
        $this->userId = $userId;
        $this->annonceId = $annonceId;
    }

    public function saveComment()
    {
        CommentDAO::saveComment($this->comment, $this->userId, $this->annonceId);
    }

    public static function getCommentsByAnnonceId($annonceId)
    {
        return CommentDAO::getCommentsByAnnonceId($annonceId);
    }
}
