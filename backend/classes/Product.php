<?php
class Product {
    public $category;
    public $name;
    public $brand;
    public $description;
    public $price;
    public $discount;

    public function __construct($_category, $_name, $_brand, $_description, $_price)
    {
        $this->category = $_category;
        $this->name = $_name;
        $this->brand = $_brand;
        $this->description = $_description;
        $this->price = $_price;
    }

    public function setDiscount($userType) {
        if ($userType === 'free') {
            $this->discount = 0;
        } else if ($userType === 'premium') {
            $this->discount = 15;
        } else {
            throw new Exception('Tipo utente errato');
        }
    }
}