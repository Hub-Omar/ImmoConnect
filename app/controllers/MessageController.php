<?php

namespace App\controllers;

require_once '../../vendor/autoload.php';

use App\models\MessageModel;

class MessageController
{

    public function addMessage($emitterId, $receiverId, $message)
    {
        $success = MessageModel::addMessage($emitterId, $receiverId, $message);

        if ($success) {
            echo "Message added successfully!";
        } else {
            echo "Failed to add message.";
        }
    }

    public function message()
    {
        $id = 1;
        $messages = MessageModel::getMessagesUser($id);
        $this->viewChat($messages);
    }

    private function viewChat($messages)
    {

        include '../../views/user/chat.php';
        exit();
    }
}
