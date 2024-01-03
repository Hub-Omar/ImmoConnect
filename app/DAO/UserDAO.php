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
        return $user;
    }

    public static function getAllUsers()
    {   $conn = Database::connect();

        $requete = "SELECT * FROM `user`";
        $stmt = $conn->prepare($requete);
        $stmt->execute();

        $result=$stmt->get_result();
        $users = $result->fetch_all(MYSQLI_ASSOC);

        $stmt->close();
        $conn->close();
<<<<<<< HEAD

       return $users;
    }

    public static function getUserbyId($id)
    {
         $conn=Database::connect();

        $requete = "SELECT * FROM `user` WHERE `id`=?";
        $stmt = $conn->prepare($requete);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        
        $stmt->close();
        
        return $user;
=======
        return $row;
>>>>>>> fbd0a7f29c1d144448ad9de933b4c2d8bdcf867f
    }
    

    public static function updateUser(){
       $conn=Database::connect();
       
       $requete = "UPDATE `user` 
                  SET `nom_complet`= ?, `email`=?, `password`= ?, `Tel`= ?, `profile`= ?, `role_id`= ?
                   WHERE `id`=?";

        $stmt=$conn->prepare($requete);
        $stmt->bind_param("sssssi", $nom_complet, $email, $password, $tel, $profile, $role_id);
        $result = $stmt->execute();

        $stmt->close();
        $conn->close();
        return $result;
    }

    public static function deleteUser($id)
    {
      $conn = Database::connect();

      $requete = "DELETE FROM `user` WHERE `id`=?";
      $stmt = $conn->prepare($requete);
      $stmt->bind_param("i", $id);

      $result = $stmt->execute();

      $stmt->close();
      $conn->close();

      return $result;
    }

}

?>
