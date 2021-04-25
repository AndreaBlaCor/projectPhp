<?php
include_once("ProductsEntity.php");
include_once("dbConnect.php");


class ProductsModel{

    public function getProductList(){
        $pdo = getConnectToDB();
        $query = "SELECT * FROM products";
        $sth = $pdo->query($query, PDO::FETCH_ASSOC) ;
        $products = $sth->fetchAll();
        foreach($products as $product){
            $res [] = new ProductsEntity($product['id'], $product['nombre'], $product['nombre'], $product['precio'], $product['imagen']  );
        }
        return $res;
    }
}
?>