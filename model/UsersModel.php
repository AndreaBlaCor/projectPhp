<?php
include_once("model/UsersEntity.php");
include_once("dbConnect.php");

class UsersModel{

    // public function getUserList(){
    //     return array(
    //         new UsersEntity("01","admin","admin@mer.ie","admin123","Admin","Admin", ""),
    //         new UsersEntity("02","user1","us1@gmail.com","123456","User","Test", ""),
    //         new UsersEntity("03","user2","us2@gmail.com","987654","Test","User", "")
    //     )
    // }

    public function getUserByEmail($email){
        $pdo = getConnectToDB();
        $query = "SELECT * FROM users WHERE email = '$email'";
        $sth = $pdo->query($query, PDO::FETCH_ASSOC) ;
        $user = $sth->fetchAll();
        $res = null;

        if($user) {
            $res = new UsersEntity(
                $user["id"], 
                $user['name'], 
                $user['email'], 
                $user['password'], 
                $user['firstname'], 
                $user['surname'], 
                $user['pic'] );
        }

        return $res;
        
    }
}
?>