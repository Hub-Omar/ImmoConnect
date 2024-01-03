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
        $row = $result->fetch_all(MYSQLI_ASSOC);

        $stmt->close();
        $conn->close();

       return $row;
    }

    public static function updateUser()
    {
       $conn=Database::connect();
       
       $requete = "UPDATE `user` 
                  SET `nom_complet`= ?, `email`=?, `password`= ?, `Tel`= ?, `profile`= ?, `role_id`= ? WHERE `id`=?";

        $stmt=$conn->prepare($requete);
        $stmt->bind_param("sssssi", $nom_complet, $email, $password, $tel, $profile, $role_id);
        $result = $stmt->execute();

        $stmt->close();
        $stmt->close();
        return $result;
    }

}
?>