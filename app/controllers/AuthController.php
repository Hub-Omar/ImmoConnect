<?php

namespace App\controllers;

require_once '../../vendor/autoload.php';
use App\models\UserModel;
use App\DAO\UserDAO;
session_start();
class AuthController
{
    public function signup()
    {
        include '../../views/auth/signUp.php';
        exit();
    }

    public function registerUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signup'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $phone = $_POST['phone'];

            $userModel = UserModel::registerUser($name, $email, $password, $phone);

            header("Location: signin");
            exit();
        } else {
            include '../../views/auth/signUp.php';
            exit();
        }
    }

    public function login()
    {
        include '../../views/auth/login.php';
        exit();
    }

    public function authenticateUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userModel = UserModel::authenticateUser($email, $password);

            if ($userModel) {
                $user = UserDAO::getUserByEmail($email);

                if ($user['role_id'] == 1) {
                    header("Location: admin");
                    exit();
                } elseif ($user['role_id'] == 2) {
                    $_SESSION['user_image'] = $user['profile'];
                    header("Location: details");
                    exit();
                }
            } else {
            }
        } else {
            include '../../views/auth/login.php';
            exit();
        }
    }
}
