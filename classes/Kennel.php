<?php
include_once __DIR__ . '/Product.php';

class Kennel extends Product{

    private $sizes;

    public function getSizes()
    {
        return $this->sizes;
    }

    public function setSizes($sizes)
    {
        $this->sizes = $sizes;

        return $this;
    }
}

?>
