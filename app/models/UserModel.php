<?php

namespace App\models;

require '../../vendor/autoload.php';
use App\dao\UserDAO;

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
<<<<<<< HEAD

    

    

}
=======
}
>>>>>>> cdf2569db169f35cd82e1e84fe274de5dff741bd
