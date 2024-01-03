<?php

namespace App\DAO;

require '../../vendor/autoload.php';
use App\database\Database;
use App\entity\UserEntity;

class UserDAO
{
    public static function registerUser(UserEntity $user)
    {
        $conn = Database::connect();
        $fullName = $user->getFullName();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $tel = $user->getTel();
        $role = $user->getRoleId(); 

        
        $sql = "INSERT INTO `user` (`nom_complet`, `email`, `password`, `Tel`, `role_id`) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        
        $stmt->bind_param("ssssi", $fullName, $email, $password, $tel, $role);
        $stmt->execute();

        $stmt->close();
        $conn->close();
    }

    public static function getUserByEmail($email)
    {
        $conn = Database::connect();

        $sql = "SELECT * FROM `user` WHERE `email` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();

        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        $stmt->close();
        $conn->close();

        return $user;
    }
}
