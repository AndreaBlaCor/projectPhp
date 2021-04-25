<?php
/*ENTITY*/

class UsersEntity{
    public $usId;
    public $usUsername;
    public $usEmail;
    public $usPassword;
    public $usFirstName;
    public $usSurname;
    public $usPic;

    public function __construct($usId,$usUsername,$usEmail,$usPassword,$usFirstName,$usSurname,$usPic){
        $this->usId = $usI;
        $this->usUsername = $usUsername;
        $this->usEmail = $usEmail;
        $this->usPassword = $usPassword;
        $this->usFirstName = $usFirstName;
        $this->usSurname = $usSurname;
        $this->usPic = $usPic;
    }

    /*getter*/
    public function getUsId(){
        return $this->usId;
    }

    public function getUsUsername(){
        return $this->usUsername;
    }

    public function getUsEmail(){
        return $this->usEmail;
    }

    public function getUsPassword(){
        return $this->usPassword;
    }

    public function getUsFirstName(){
        return $this->usFirstName;
    }

    public function getUsSurname(){
        return $this->usSurname;
    }

    public function getUsPic(){
        return $this->usPic;
    }

    /*setter*/
    public function setUsId($usId){
        $this->usId = $usId;
    } 
    public function setUsUsername($Ususername){
        $this->usUsername = $usUsername;
    } 
    public function setUsEmail($usEmail){
        $this->usEmail = $usEmail;
    } 
    public function setUsPassword($usPassword){
        $this->usPassword = $usPassword;
    } 
    public function setUsFirstName($usFirstName){
        $this->usFirstName = $usFirstName;
    } 
    public function setUsSurname($usSurname){
        $this->usSurname = $usSurname;
    } 
    public function setUsPic($usPic){
        $this->usPic = $usPic;
    } 
}
?>