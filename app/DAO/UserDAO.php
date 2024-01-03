<?php
namespace App\dao;
require '../../vendor/autoload.php';
use App\database\Database;

class UserDAO
{
    public static function getAllUsers()
    {   $conn = Database::connect();

        $requete = "SELECT * FROM `user`";
        $stmt = $conn->prepare($requete);
        $stmt->execute();

        $result=$stmt->get_result();
        $users = $result->fetch_all(MYSQLI_ASSOC);

        $stmt->close();
        $conn->close();

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
    }

    public static function updateUser()
    {
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