<?php

namespace App\entity;
require '../../vendor/autoload.php';
class UserEntity{
    private $id;
    private $fullName;
    private $email;
    private $password;
    private $tel;
    private $roleId;


    public function __construct($id, $fullName, $email, $password, $tel, $roleId){
        $this->id = $id;
        $this->fullName = $fullName;
        $this->email = $email;
        $this->password = $password;
        $this->tel = $tel;
        $this->roleId = $roleId;
    }


    public function getId(){
        return $this->id;
    }
    public function getFullName(){
        return $this->fullName;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getTel(){
        return $this->tel;
    }
    public function getRoleId(){
        return $this->roleId;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function setFullName($fullName){
        $this->fullName = $fullName;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    public function setTel($tel){
        $this->tel = $tel;
    }
    public function setRoleId($roleId){
        $this->roleId = $roleId;
    }
}