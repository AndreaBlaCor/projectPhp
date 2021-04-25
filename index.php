<?php
    include_once("controller/ProductsController.php");

    $productController = new ProductsController();
    $productController->invoke();
?>