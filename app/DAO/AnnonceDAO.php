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

<<<<<<< HEAD
    public static function AddAnnonce($prix, $titre, $description, $date_ajout)
    {
        $conn = Database::connect();
        
        $requetAjouter = "INSERT INTO `annonce`(`prix`, `titre`, `description`, `date_ajout`) 
        VALUES (?,?,?,?)";
   
        $ajouterAnnonce = $conn->prepare($requetAjouter);

        $stmt=bind_param("issd",$prix ,$titre ,$description ,$date_ajout);
        $stmt->execute();
=======
    public function AddAnnonce()
    {
        $conn = Database::connect();
        
        $requetAjouter = "INSERT INTO `annonce`(`image`, `prix`, `titre`, `description`, `date_ajout`, `bien_id`) 
        VALUES ([value-2],[value-3],[value-4],[value-5],[value-6],[value-7])";
   
        $ajouterclients = mysqli_query($connect,$requetAjouter);
>>>>>>> bf0dd6ba067f5b4a7df567ef5bdaca65488d15fb
   
        if($ajouterclients){
        header("Location:clients.php");
   }
   else{
    echo"erreur";
   }

<<<<<<< HEAD
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
=======
>>>>>>> bf0dd6ba067f5b4a7df567ef5bdaca65488d15fb

    }

    public function DeletAnnonce()
    {
        $conn = Database::connect();

    }

    public function UpdateAnnonce()
    {        
        $conn = Database::connect();

        
    }
}
