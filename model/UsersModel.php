<?php
include_once("model/UsersEntity.php");

class UsersModel{

    public function getUserList(){
        return array(
            new UsersEntity("01","admin","admin@mer.ie","admin123","Admin","Admin", ""),
            new UsersEntity("02","user1","us1@gmail.com","123456","User","Test", ""),
            new UsersEntity("03","user2","us2@gmail.com","987654","Test","User", "")
        )
    }
}
?>