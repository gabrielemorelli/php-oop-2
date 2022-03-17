<?php

class User {
    
    public $name;
    public $lastname;
   public $email; 
   public $discount = 0;
   public $CartCredit;

    public function _construct($name, $lastanme ,$email){

        $this->name = $name;
        $this->lastname = $lastname;
        $this-> setEmail($email);

    }

    public function getEmail() {
        return $this->email;
    }

    public function SetEmail($email) {
        if (strpos( $email, '@') !== false && strpos( $email, '.') !== false) {
            $this->email = $email;
        } else {
            echo "email non valida";
        }
    }

    public function getDiscount() {
        return $this->discount;
    }

public function setCartCredit($CartCredit) {
    $this-> $CartCredit = $CartCredit;
} 
  
}