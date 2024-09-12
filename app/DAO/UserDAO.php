<?php

namespace App\DAO;

require '../../vendor/autoload.php';

use App\database\Database;

class UserDAO
{
    public static function registerUser($name, $email, $password, $tel, $roleId)
    {
        $conn = Database::connect();

        $sql = "INSERT INTO `user` (`nom_complet`, `email`, `password`, `Tel`, `role_id`) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        $stmt->bind_param("ssssi", $name, $email, $password, $tel, $roleId);
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
    {
        $conn = Database::connect();

        $requete = "SELECT * FROM `user`";
        $stmt = $conn->prepare($requete);
        $stmt->execute();

        $result = $stmt->get_result();
        $users = $result->fetch_all(MYSQLI_ASSOC);

        $stmt->close();
        $conn->close();


        return $users;
    }

    public static function getUserbyId($id)
    {
        $conn = Database::connect();

        $requete = "SELECT * FROM `user` WHERE `id`=?";
        $stmt = $conn->prepare($requete);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        $stmt->close();

        return $user;
    }


    public static function updateUser($fullName, $email, $password, $tel, $id)
    {
        $conn = Database::connect();

        $requete = "UPDATE `user` 
                  SET `nom_complet`= ?, `email`=?, `password`= ?, `Tel`= ?, `role_id`= ?
                   WHERE `id`=?";

        $stmt = $conn->prepare($requete);
        $stmt->bind_param("ssssi", $fullName, $email, $password, $tel, $id);
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

    public static function getAnnonceUser($userId)
    {
        $conn = Database::connect();

        $requete = "SELECT 
        b.id AS bien_id, 
        b.emplacement, 
        b.type, 
        b.user_id,
        a.id AS annonce_id, 
        a.prix, 
        a.titre, 
        a.description, 
        a.date_ajout,
        MIN(i.id) AS image_id,
        MIN(i.path) AS image_path
    FROM bien AS b
    JOIN images AS i ON b.id = i.bien_id
    JOIN annonce AS a ON i.annonce_id = a.id WHERE b.user_id = ?
    GROUP BY a.id";

        $stmt = $conn->prepare($requete);
        $stmt->bind_param("i", $userId);
        $stmt->execute();

        $result = $stmt->get_result();
        $biens = $result->fetch_all(MYSQLI_ASSOC);

        $stmt->close();
        $conn->close();

        return $biens;
    }
}
