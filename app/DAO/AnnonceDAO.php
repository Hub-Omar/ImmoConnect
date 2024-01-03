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

    public static function AddAnnonce($image, $prix, $titre, $description, $date_ajout)
    {
        $conn = Database::connect();
        
        $requetAjouter = "INSERT INTO `annonce`(`image`, `prix`, `titre`, `description`, `date_ajout`, `bien_id`) 
        VALUES (:image,:prix,:titre,:description,:date_ajout)";
   
        $ajouterAnnonce = $conn->prepare($requetAjouter);
        $stmt=bindparam(":image",$image);
        $stmt=bindparam(":prix",$prix);
        $stmt=bindparam(":titre",$titre);
        $stmt=bindparam(":description",$description);
        $stmt=bindparam(":date_ajout",$date_ajout);
        $stmt->execute();
   
       return $stmt;
       }

    public static function deleteAnnonce($id)
        {

       $conn = Database::connect();

       $requeteDelete = "DELETE FROM `annonce` WHERE `id` = :id";

       $delete = $conn->prepare($requeteDelete);

       $delete->bindParam(":id", $id);

       $deleteAnnonce= $delete->execute();

       return $deleteAnnonce;

       }
       

    public static function updateAnnonce($image, $prix, $titre, $description, $date_ajout)
     {

    $conn = Database::connect();

    $requeteUpdate = "UPDATE `annonce` SET `image`=:image, `prix`=:prix, `titre`=:titre, `description`=:description, `date_ajout`=:date_ajout ";
    
    $update = $conn->prepare($requeteUpdate);
    $update->bindParam(":image", $image);
    $update->bindParam(":prix", $prix);
    $update->bindParam(":titre", $titre);
    $update->bindParam(":description", $description);
    $update->bindParam(":date_ajout", $date_ajout);

    $updateAnnonce=$update->execute();

    return $updateAnnonce;

    }
}
