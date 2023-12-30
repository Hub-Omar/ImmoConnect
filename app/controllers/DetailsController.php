<?php

namespace App\controllers;
require_once '../../vendor/autoload.php';

class DetailsController
{

    public function details()
    {
        include '../../views/user/details/details.php';
        exit();
    }

    public function signup()
    {
        include '../../views/auth/signUp.php';
        exit();
    }
}