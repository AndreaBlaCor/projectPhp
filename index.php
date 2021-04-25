<?php
    include_once("controller/ProductsController.php");

    var_dump($_POST);
    

    $productController = new ProductsController();
    $productController->invoke();
?>