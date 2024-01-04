<?php

namespace App\controllers;

require_once '../../vendor/autoload.php';
use App\models\MessageModel;
use App\DAO\MessageDAO;

class MessageController
{
    public function viewChat()
    {
        include '../../views/user/chat.php';
        exit();
    }
    public function addMessage($emitterId, $receiverId, $message)
    {
        $success = MessageModel::addMessage($emitterId, $receiverId, $message);

        if ($success) {
            echo "Message added successfully!";
        } else {
            echo "Failed to add message.";
        }
    }

    
}
