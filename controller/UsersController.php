<?php
include_once("model/UsersModel.php");

class UsersController{
    
    public $model;

    public function __construct(){
        $this->model=new UsersModel();
    }

    public function invoke(){
                
        include 'loginPage.php';
    }

    public function checkUser(){

    }
}
?>