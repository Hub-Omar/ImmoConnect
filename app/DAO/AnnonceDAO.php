<?php

namespace App\dao;

require '../../vendor/autoload.php';
use App\database\Database;

class AnnonceDAO
{

    public static function getAnnonceById($id)
    {
        $conn = Database::connect();

        $sql = "SELECT annonce.*, images.path
                FROM annonce
                JOIN images ON annonce.id = images.annonce_id
                WHERE annonce.id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $result = $stmt->get_result();
        $annonce = $result->fetch_assoc();

        $images = [];
        while ($row = $result->fetch_assoc()) {
            $images[] = $row['path'];
        }

        $annonce['images'] = $images;

        $stmt->close();
        $conn->close();

        return $annonce;
    }


    public static function getAllAnnonce()
    {
        $conn = Database::connect();

        $sql = "SELECT 
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
    JOIN annonce AS a ON i.annonce_id = a.id
    GROUP BY a.id
    ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->get_result();
        $all_annonce = $result->fetch_all(MYSQLI_ASSOC);

        $stmt->close();
        $conn->close();

        return $all_annonce;
    }

<<<<<<< HEAD

=======
    //     public function AddAnnonce()
//     {
//         $conn = Database::connect();

    //         $requetAjouter = "INSERT INTO `annonce`(`image`, `prix`, `titre`, `description`, `date_ajout`, `bien_id`) 
//         VALUES ([value-2],[value-3],[value-4],[value-5],[value-6],[value-7])";

    //         $ajouterclients = mysqli_query($connect,$requetAjouter);

    //         if($ajouterclients){
//         header("Location:clients.php");
//    }
//    else{
//     echo"erreur";
//    }


    //     }

    //     public function DeletAnnonce()
//     {
//         $conn = Database::connect();

    //     }

    //     public function UpdateAnnonce()
//     {        
//         $conn = Database::connect();


    //     }
>>>>>>> Nabil
}
    
