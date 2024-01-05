<?php

namespace App\controllers;

require_once '../../vendor/autoload.php';

use App\models\MessageModel;
use App\models\ResponseModel;
session_start();
class MessageController
{

    public function addMessage()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addMessage'])) {
            $emitterId = $_POST['emetteur_id'];
            $receiverId = $_POST['recepteur_id'];
            $message = $_POST['message'];

            $success = MessageModel::addMessage($emitterId, $receiverId, $message);

            if ($success) {
                echo "Message added successfully!";
                header("Location:viewChat");
            } else {
                echo "Failed to add message.";
            }
        }
    }


    public function message()
    {
        $id =$_SESSION['id'];
        $message_id = 2;
        $messages = MessageModel::getMessagesUser($id);
        $responses = ResponseModel::getResponsesByMessageId($message_id);
        $this->viewChat($messages, $responses);
    }

    private function viewChat($messages, $responses)
    {

        include '../../views/user/chat.php';
        exit();
    }
}
