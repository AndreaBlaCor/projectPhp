<?php
    include_once("controller/UsersController.php");

    $usersController = new UsersController();

    if(!$_POST) {                
        $usersController->invoke();
        return;
    }
   
    $emailInput  = $_POST['email'];
    $passInput = $_POST['password'];
    $user = $usersController->checkUser($_POST['email']);
    if($user){

        //compruebo si la contraseña es igual
        var_dump($user);
        
    } else
    {
        //el usuario no existe pongo mensaje de error y llamo de nuevo a login
    }

    

   
   
?> 