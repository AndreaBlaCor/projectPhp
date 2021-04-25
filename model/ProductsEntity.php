<?php 
/*ENTITY*/
class ProductsEntity{
    public $prId;
    public $prName;
    public $prDesc;
    public $prPrice;
    public $prPic;

    public function __construct($prId,$prName,$prDesc,$prPrice,$prPic){
        $this->prId = $prId;
        $this->prName = $prName;
        $this->prDesc = $prDesc;
        $this->prPrice = $prPrice;
        $this->prPic = $prPic;
    }

    /*getter*/
    public function getPrId(){
        return $this->prId;
    }

    public function getPrName(){
        return $this->prName;
    }
    
    public function getPrDesc(){
        return $this->prDesc;
    }

    public function getPrPrice(){
        return $this->prPrice;
    }

    public function getPrPic(){
        return $this->prPic;
    }
    
    /*setter*/
    public function setPrId($prId){
        $this->prId = $prId;
    }

    public function setPrName($prName){
        $this->prName = $prName;
    }
    
    public function setPrDesc($prDesc){
        $this->prDesc =$prDesc;
    }

    public function setPrPrice($prPrice){
        $this->prPrice = $prPrice;
    }

    public function setPrPic($prPic){
        $this->prPic = $prPic;
    }
}
?>