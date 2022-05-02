<?php
include_once __DIR__ . '/Product.php';

class Toy extends Product{

    private $sizes;
    private $pet;
    private $reference;
    private $color;

    public function getSizes()
    {
        return $this->sizes;
    }

    public function setSizes($sizes)
    {
        $this->sizes = $sizes;

        return $this;
    }

    public function getPet()
    {
        return $this->pet;
    }

    public function setPet($pet)
    {
        $this->pet = $pet;

        return $this;
    }

    public function getReference()
    {
        return $this->reference;
    }

    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}

?>
