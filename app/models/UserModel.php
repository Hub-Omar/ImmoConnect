<?php

namespace App\models;
require '../../vendor/autoload.php';
use App\dao\UserDAO;
use App\entity\UserEntity;

class UserModel
{
    public function registerUser($name, $email, $password, $phone)
    {
        $userEntity = $userEntity = new UserEntity(null, $name, $email, $password, $phone, 2);
        $userEntity->setFullName($name);
        $userEntity->setEmail($email);
        $userEntity->setPassword(password_hash($password, PASSWORD_DEFAULT));
        $userEntity->setTel($phone);
        $userEntity->setRoleId(2); 

        UserDAO::registerUser($userEntity);
    }

    public function authenticateUser($email, $password)
    {
        $user = UserDAO::getUserByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            return true;
        }

        return false;
    }

    

    

}
