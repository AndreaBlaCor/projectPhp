<?php
include_once ('pdoConfig.php');

function getConnectToDB() {

    try {
        $pdo = new PDO(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD);
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;

    }    catch (PDOException $pe) {
        die("Could not connect to the database ". DB_NAME ." ". $pe->getMessage());
    }

}

