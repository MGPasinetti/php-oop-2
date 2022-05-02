<?php

class Product {
    public $id;
    public $name;
    public $description;
    public $price;
    public $manufacturer;
    public $image;

    public function __construct($id, $name, $description, $price, $manufacturer, $image) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->manufacturer = $manufacturer;
        $this->image = $image;
    }
}

?>
