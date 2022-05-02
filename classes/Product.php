<?php

class Product {
    private $id;
    private $name;
    private $description;
    private $price;
    private $manufacturer;
    private $image;

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
