<?php

namespace App\models;

require '../../vendor/autoload.php';
use App\dao\UserDAO;
use App\controllers;

class UserModel
{
    public static function registerUser($name, $email, $password, $phone)
    {
        $roleId = 2; 

        UserDAO::registerUser($name, $email, password_hash($password, PASSWORD_DEFAULT), $phone, $roleId);
    }

    public static function authenticateUser($email, $password)
    {
        $user = UserDAO::getUserByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            return true;
        }

        return false;
    }

    public static function getAllUsers()
    {
        $allusers = UserDAO::getAllUsers();
        
        return $allusers;
    }

    public static function getUserbyId($id)
    {
        $userbyid = UserDAO::getUserbyId($id);
        return $userbyid;
    }

    public static function updateUser($name, $email, $password, $tel, $id)
    {
        $updateUser = UserDAO::updateUser($name , $email , $password , $tel , $id);
        return $updateUser;

    }

    public static function deleteUser($id)
    {
        $deleteUser = UserDAO::deleteUser($id);
        return $deleteUser;
    }

    public static function getUserAnnonce($userId)
    {
        $biens = UserDAO::getAnnonceUser($userId);
        return $biens;
    }
    

    

}

