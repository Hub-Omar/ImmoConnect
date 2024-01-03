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
        
    }

}
?>