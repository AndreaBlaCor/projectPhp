<?php
include_once("model/UsersModel.php");

class UsersController{
    
    public $model;

    public function __construct(){
        $this->model=new UsersModel();
    }

    public function invoke(){
        $users=$this->model->getUserList();
        include 'layout/UserList.php;'
    }
}
?>