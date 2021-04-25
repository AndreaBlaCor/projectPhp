<?php
include_once ('pdoConfig.php');
$servername = "mysql:dbname=phpProject;host=localhost";
$username = "root";
$password = "";

 
 


 try {
    $pdo = new PDO($servername, $username, $password);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;

}    catch (PDOException $pe) {
    die("Could not connect to the database ". DB_NAME ." ". $pe->getMessage());
}

