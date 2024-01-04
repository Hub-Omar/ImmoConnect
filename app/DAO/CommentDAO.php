<?php

namespace App\dao;
require '../../vendor/autoload.php';
use App\database\Database;

class CommentDAO
{
    public static function saveComment($comment, $userId, $annonceId)
    {
        $conn = Database::connect();

        $sql = "INSERT INTO `commentaire`(`label`, `annonce_id`, `user_id`) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sii", $comment, $annonceId, $userId);
        $stmt->execute();

        $stmt->close();
        $conn->close();
    }

    public static function getCommentsByAnnonceId($annonceId)
    {
        $conn = Database::connect();

        $sql = "SELECT * FROM `commentaire` WHERE `annonce_id` = ? ORDER BY id DESC LIMIT 4";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $annonceId);
        $stmt->execute();

        $result = $stmt->get_result();
        $comments = $result->fetch_all(MYSQLI_ASSOC);

        $stmt->close();
        $conn->close();

        return $comments;
    }
}
