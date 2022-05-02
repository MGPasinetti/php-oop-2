<?php
class Product {
    protected $id;
    protected $name;
    protected $description;
    protected $price;
    protected $manufacturer;
    protected $image;

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
