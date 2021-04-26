<?php
include_once("model/UsersModel.php");

class UsersController{
    
    public $model;

    public function __construct(){
        $this->model=new UsersModel();
    }

    public function invoke(){
                
        include 'layout/loginPage.php';
    }   

    public function checkUser($email){
        $user = $this->model->getUserByEmail($email);
        return $user;

    }
}
?>