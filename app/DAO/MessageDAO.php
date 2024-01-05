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
    public static function addMessage($emitterId, $receiverId, $message)
    {
        $conn = Database::connect();

        $checkSql = "SELECT * FROM `Message` WHERE `emetteur_id` = ? AND `recepteur_id` = ?";
        $checkStmt = $conn->prepare($checkSql);
        $checkStmt->bind_param("ii", $emitterId, $receiverId);
        $checkStmt->execute();

        $checkResult = $checkStmt->get_result();
        $existingMessage = $checkResult->fetch_assoc();

        $checkStmt->close();

        if ($existingMessage) {
            $responseSql = "INSERT INTO `Response` (`message_id`, `reply`, `sent_at`) VALUES (?, ?, CURRENT_TIMESTAMP)";
            $responseStmt = $conn->prepare($responseSql);
            $responseStmt->bind_param("is", $existingMessage['id'], $message);
            $success = $responseStmt->execute();
            $responseStmt->close();
        } else {
            $messageSql = "INSERT INTO `Message` (`emetteur_id`, `recepteur_id`, `message`, `sent_at`) VALUES (?, ?, ?, CURRENT_TIMESTAMP)";
            $messageStmt = $conn->prepare($messageSql);
            $messageStmt->bind_param("iis", $emitterId, $receiverId, $message);
            $success = $messageStmt->execute();
            $messageStmt->close();
        }

        $conn->close();

        return $success;
    }
    public static function getMessagesUser($id){
        $conn = Database::connect();

        $requetSql = "SELECT ur.nom_complet as nom_recepteur,u.nom_complet as nom_emetteur,M.* FROM  user as ur JOIN `message` as M On ur.id=m.recepteur_id JOIN `user` as u  on M.emetteur_id=u.id   WHERE `emetteur_id` = ?";
        $stmt = $conn->prepare($requetSql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $messages = $result->fetch_all(MYSQLI_ASSOC);

        $stmt->close();
        $conn->close();
return $messages;

    }


}
