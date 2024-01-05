<?php
namespace App\controllers;

require '../../vendor/autoload.php';
use App\models\UserModel;



class UserController
{
<<<<<<< HEAD
    public function home()
    {
      include 'index.php';
      exit();
    }

  public function profil()
  {
    include '../../views/user/profil/profil.php';
    exit();
  }

  public function getAllUsers()
=======
    
    public function getAllUsers()
>>>>>>> e3d18a8bac3a5801151673706064aefab453696a
    {
        $allUsers = UserModel::getAllUsers();
        // Faites quelque chose avec la liste des utilisateurs récupérés

    }

    public function getUserById($id)
    {
        $user = UserModel::getUserbyId($id);
        // Faites quelque chose avec l'utilisateur récupéré
    }

    public function updateUser()
    {
        if (isset($_POST['edit']) && isset($_GET['id'])) {
            
            $name = $_POST['nom_complet'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $tel = $_POST['tel'];
            $id = $_POST['id'];
            
            
            $isUpdated = UserModel::updateUser($name, $email, $password, $tel, $id);

            if ($isUpdated) {
                header('location:../../../../views/user/profil/profil.php');
            } else {
                echo"l'update d'utilisateur à échouée";
            }
        } else {
            include '../../views/auth/signUp.php';
            exit();
        }
    }

    public function deleteUser($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['deleteUser'])) {
            $isDeleted = UserModel::deleteUser($id);
            
            if ($isDeleted) {
                header('location:../../../../views/admin/test.php');
            } else {
                echo "Suppression d'Utilisateur échouée";
            }
        } else {
            header('location:../../../../index.php');
        }
    }
    public function profil($biens)
    {
      include '../../views/user/profil/profil.php';
      exit();
    }

    public function getUserAnnonce()
    {
        $userId = 2; 
        $biens = UserModel::getUserAnnonce($userId);
    
        if ($biens) {
            $this->profil($biens);
        } else {
         
            echo "Error retrieving user announcements.";
        }
    }
    
}
?>
