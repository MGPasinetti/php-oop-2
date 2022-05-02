<?php
class Product {
    protected $id;
    protected $name;
    protected $description;
    protected $price;
    protected $manufacturer;
    protected $image;

    protected $discount = 0;

    public function __construct($id, $name, $description, $price, $manufacturer, $image) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->manufacturer = $manufacturer;
        $this->image = $image;
    }

    public function applyDiscount($discount){
        $discount = $this->price * $discount / 100;
        $this->price -= $discount;
    }
}

?>
