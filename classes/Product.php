<?php

class Product {

    public $name;
    public $description;
    public $price = 0;
   

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        if (is_numeric($price) && $price >= 0 ) {
            $this->price = $price;
        }
    }

  

}