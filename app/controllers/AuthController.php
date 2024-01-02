<?php

namespace App\controllers;

require_once '../../vendor/autoload.php';


class AuthController
{

    public function signup()
    {
        include '../../views/auth/signUp.php';
        exit();
    }

    public function login()
    {
        include '../../views/auth/login.php';
        exit();
    }
}
