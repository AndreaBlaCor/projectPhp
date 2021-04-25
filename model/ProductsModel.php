<?php
include_once("model/ProductsEntity.php");

class ProductsModel{

    public function getProductList(){
        return array(
            new ProductsEntity("01", "Amethist", "Purple", "50", ""),
            new ProductsEntity("02", "Quarz", "Pink", "20", ""),
            new ProductsEntity("03", "Lapiz Lazuri", "Azul", "550", "")
        );
    }
}
?>