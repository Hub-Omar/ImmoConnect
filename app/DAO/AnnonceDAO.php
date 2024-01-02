<?php

namespace App\dao;
require '../../vendor/autoload.php';
use App\database\Database;

class AnnonceDAO
{

    public static function getAnnonceById($id)
    {
        $conn = Database::connect();

        $sql = "SELECT * FROM `annonce` WHERE `id` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $result = $stmt->get_result();
        $annonce = $result->fetch_assoc();

        $stmt->close();
        $conn->close();

        return $annonce;
    }

    public static function getAllAnnonce()
    {
        $conn = Database::connect();
    
        $sql = "SELECT * FROM `annonce`";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    
        $result = $stmt->get_result();
        $all_annonce = $result->fetch_all(MYSQLI_ASSOC);
    
        $stmt->close();
        $conn->close();
    
        return $all_annonce;
    }
    
}
