<?php

namespace App\models;

require_once '../../vendor/autoload.php';

use App\DAO\ResponseDAO;

class ResponseModel
{
    private $id;
    private $messageId;
    private $emetteurId;
    private $reply;
    private $sentAt;

    public function __construct($messageId, $emetteurId, $reply, $sentAt)
    {
        $this->messageId = $messageId;
        $this->emetteurId = $emetteurId;
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
    public function getEmetteurId()
    {
        return $this->emetteurId;
    }

    public function setEmetteurId($emetteurId)
    {
        $this->emetteurId = $emetteurId;
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
    public static function getResponsesByRecepteurId($recepteurId)
    {
        return ResponseDAO::getResponsesByRecepteurId($recepteurId);
    }

    public static function addResponse($messageId, $emetteurId, $reply)
    {
        return ResponseDAO::addResponse($messageId, $emetteurId, $reply);
    }
}
