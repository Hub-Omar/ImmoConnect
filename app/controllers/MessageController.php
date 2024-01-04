<?php

namespace App\controllers;

require_once '../../vendor/autoload.php';
use App\models\MessageModel;
use App\DAO\MessageDAO;

class MessageController
{
    public function view()
    {
        include '../../views/user/chat.php';
        exit();
    }

    
}
