<?php

namespace App\models;
require '../../vendor/autoload.php';
use App\dao\MessageDAO;

class MessageModel
{
    private $id;
    private $senderId;
    private $receiverId;
    private $messageText;
    private $sentAt;

    public function __construct($id, $senderId, $receiverId, $messageText, $sentAt)
    {
        $this->id = $id;
        $this->senderId = $senderId;
        $this->receiverId = $receiverId;
        $this->messageText = $messageText;
        $this->sentAt = $sentAt;
    }

    public static function getMessageById($id)
    {
        return MessageDAO::getMessageById($id);
    }

    public static function getAllMessages()
    {
        return MessageDAO::getAllMessages();
    }


}
