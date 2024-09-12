<?php

namespace App\models;

use App\dao\MessageDAO;

class MessageModel
{
    private $id;
    private $emitterId;
    private $receiverId;
    private $message;
    private $sentAt;

    public function __construct($emitterId, $receiverId, $message, $sentAt)
    {
        $this->emitterId = $emitterId;
        $this->receiverId = $receiverId;
        $this->message = $message;
        $this->sentAt = $sentAt;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getEmitterId()
    {
        return $this->emitterId;
    }

    public function setEmitterId($emitterId)
    {
        $this->emitterId = $emitterId;
    }

    public function getReceiverId()
    {
        return $this->receiverId;
    }

    public function setReceiverId($receiverId)
    {
        $this->receiverId = $receiverId;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function getSentAt()
    {
        return $this->sentAt;
    }

    public function setSentAt($sentAt)
    {
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

    public static function addMessage($emitterId, $receiverId, $message)
    {
        return MessageDAO::addMessage($emitterId, $receiverId, $message);
    }

    public static function getMessagesUser($id)
    {
        return MessageDAO::getMessagesUser($id);
    }
}
