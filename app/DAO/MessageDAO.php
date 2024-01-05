<?php

namespace App\dao;

use App\database\Database;
use App\DAO\ResponseDAO;

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

    $existingMessage = self::getExistingMessage($conn, $emitterId, $receiverId);

    if ($existingMessage) {
        $success = ResponseDAO::addResponse($existingMessage['id'], $emitterId, $message);
    } else {
        $success = self::insertNewMessage($conn, $emitterId, $receiverId, $message);
    }

    $conn->close();

    return $success;
}


    private static function getExistingMessage($conn, $emetteurId, $receiverId)
    {
        $checkSql = "SELECT * FROM `Message` WHERE `emetteur_id` = ? AND `recepteur_id` = ?";
        $checkStmt = $conn->prepare($checkSql);
        $checkStmt->bind_param("ii", $emetteurId, $receiverId);
        $checkStmt->execute();

        $checkResult = $checkStmt->get_result();
        $existingMessage = $checkResult->fetch_assoc();

        $checkStmt->close();

        return $existingMessage;
    }

    private static function insertNewMessage($conn, $emetteurId, $receiverId, $message)
    {
        $messageSql = "INSERT INTO `Message` (`emetteur_id`, `recepteur_id`, `message`, `sent_at`) VALUES (?, ?, ?, CURRENT_TIMESTAMP)";
        $messageStmt = $conn->prepare($messageSql);
        $messageStmt->bind_param("iis", $emetteurId, $receiverId, $message);
        $success = $messageStmt->execute();
        $messageStmt->close();

        return $success;
    }

    public static function getMessagesUser($id)
    {
        $conn = Database::connect();

        $requestSql = "SELECT ur.nom_complet as nom_recepteur, u.nom_complet as nom_emetteur, M.* FROM user as ur JOIN `message` as M ON ur.id = m.recepteur_id JOIN `user` as u ON M.emetteur_id = u.id WHERE `emetteur_id` = ?";
        $stmt = $conn->prepare($requestSql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $messages = $result->fetch_all(MYSQLI_ASSOC);

        $stmt->close();
        $conn->close();

        return $messages;
    }
}
