<?php
include_once __DIR__ . '/Product.php';

class Accessory extends Product {
    private $review;
    private $weight;
    private $use;

    public function  __construct($id, $name, $description, $price, $manufacturer, $image, $review) {
        parent::__construct($id, $name, $description, $price, $manufacturer, $image);
        $this->review = $review;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    public function getUse()
    {
        return $this->use;
    }

    public function setUse($use)
    {
        $this->use = $use;

        return $this;
    }
}

?>
