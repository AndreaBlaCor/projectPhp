<?php
   include_once("controller/UsersController.php");

    echo "pasa";
    var_dump($_POST);

   $usersController = new UsersController();
   $usersController->invoke();
   
?> 