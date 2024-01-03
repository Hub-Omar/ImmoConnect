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

    public static function AddAnnonce($prix, $titre, $description, $date_ajout)
    {
        $conn = Database::connect();
        
        $requetAjouter = "INSERT INTO `annonce`(`prix`, `titre`, `description`, `date_ajout`) 
        VALUES (?,?,?,?)";
   
        $ajouterAnnonce = $conn->prepare($requetAjouter);

        $stmt=bind_param("issd",$prix ,$titre ,$description ,$date_ajout);
        $stmt->execute();
   
       return $stmt;
       }

    public static function deleteAnnonce($id)
        {

       $conn = Database::connect();

       $requeteDelete = "DELETE FROM `annonce` WHERE `id` = ?";

       $delete = $conn->prepare($requeteDelete);

       $delete->bind_param("i", $id);

       $deleteAnnonce= $delete->execute();

       return $deleteAnnonce;

       }
       

    public static function updateAnnonce($prix, $titre, $description, $date_ajout)
     {

    $conn = Database::connect();

    $requeteUpdate = "UPDATE `annonce` SET `prix`=?, `titre`=?, `description`=?, `date_ajout`=?";

    $update = $conn->prepare($requeteUpdate);
    $update->bind_param("issd",$prix, $titre, $description, $date_ajout);
    
    $updateAnnonce=$update->execute();

    return $updateAnnonce;

    }
}
