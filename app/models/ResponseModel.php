<?php

namespace App\models;

require_once '../../vendor/autoload.php';

use App\DAO\ResponseDAO;

class ResponseModel
{
    private $id;
    private $messageId;
    private $reply;
    private $sentAt;

    public function __construct($id, $messageId, $reply, $sentAt)
    {
        $this->id = $id;
        $this->messageId = $messageId;
        $this->reply = $reply;
        $this->sentAt = $sentAt;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getMessageId()
    {
        return $this->messageId;
    }

    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;
    }

    public function getReply()
    {
        return $this->reply;
    }

    public function setReply($reply)
    {
        $this->reply = $reply;
    }

    public function getSentAt()
    {
        return $this->sentAt;
    }

    public function setSentAt($sentAt)
    {
        $this->sentAt = $sentAt;
    }

    public static function getResponsesByMessageId($messageId)
    {
        return ResponseDAO::getResponsesByMessageId($messageId);
    }
    public static function addResponse($messageId, $reply)
    {
        return ResponseDAO::addResponse($messageId, $reply);
    }
}
