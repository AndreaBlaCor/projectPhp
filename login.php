<?php
   include_once("controller/UsersController.php");
    
    var_dump($_POST);

    if($_POST) {
        $usersController = new UsersController();
        $user = $usersController->checkUser($_POST['email']);
        if($user){
            //compruebo si la contraseña es igual
            var_dump($user);
            
        } else
        {
            //el usuario no existe pongo mensaje de error y llamo de nuevo a login
        }

    }else
    {
        $usersController = new UsersController();
        $usersController->invoke();
    }

   
   
?> 