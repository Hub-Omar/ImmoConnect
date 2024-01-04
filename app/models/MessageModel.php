<?php

namespace App\models;

require '../../vendor/autoload.php';

use App\dao\MessageDAO;

class MessageModel
{


    private $id;
    private $emetteur_id;
    private $recepteur_id;
    private $message;
    private $sent_at;

    public function __construct($id, $emetteur_id, $recepteur_id, $message, $sent_at)
    {
        $this->id = $id;
        $this->emetteur_id = $emetteur_id;
        $this->recepteur_id = $recepteur_id;
        $this->message = $message;
        $this->sent_at = $sent_at;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getEmetteurId()
    {
        return $this->emetteur_id;
    }

    public function setEmetteurId($emetteur_id)
    {
        $this->emetteur_id = $emetteur_id;
    }

    public function getRecepteurId()
    {
        return $this->recepteur_id;
    }

    public function setRecepteurId($recepteur_id)
    {
        $this->recepteur_id = $recepteur_id;
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
        return $this->sent_at;
    }

    public function setSentAt($sent_at)
    {
        $this->sent_at = $sent_at;
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
