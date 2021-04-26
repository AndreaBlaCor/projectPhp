<?php
include_once("model/ProductsModel.php");

class ProductsController{

    public $model;

    public function __construct(){
        $this->model=new ProductsModel();
    }

    public function invoke(){
        $products=$this->model->getProductList();
        include 'layout/productList.php';
    }
}
?>