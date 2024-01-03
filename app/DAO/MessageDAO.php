<?php

namespace App\dao;
require '../../vendor/autoload.php';
use App\database\Database;

class MessageDAO
{
    public static function getMessageById($id)
    {
        $conn = Database::connect();

        $sql = "SELECT * FROM `Message` WHERE `id` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $result = $stmt->get_result();
        $message = $result->fetch_assoc();

        $stmt->close();
        $conn->close();

        return $message;
    }

    public static function getAllMessages()
    {
        $conn = Database::connect();

        $sql = "SELECT * FROM `Message`";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->get_result();
        $allMessages = $result->fetch_all(MYSQLI_ASSOC);

        $stmt->close();
        $conn->close();

        return $allMessages;
    }


}
