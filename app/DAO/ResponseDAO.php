<?php

namespace App\dao;

require_once '../../vendor/autoload.php';
use App\database\Database;

class ResponseDAO
{
    public static function getResponsesByMessageId($messageId)
    {
        $conn = Database::connect();

        $sql = "SELECT * FROM `Response` WHERE `message_id` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $messageId);
        $stmt->execute();

        $result = $stmt->get_result();
        $responses = $result->fetch_all(MYSQLI_ASSOC);

        $stmt->close();
        $conn->close();

        return $responses;
    }
    public static function addResponse($messageId, $reply)
    {
        $conn = Database::connect();

        $sql = "INSERT INTO `Response` (`message_id`, `reply`, `sent_at`) VALUES (?, ?, CURRENT_TIMESTAMP)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("is", $messageId, $reply);
        
        $success = $stmt->execute();

        $stmt->close();
        $conn->close();

        return $success;
    }
    public static 

}
