<?php
include_once __DIR__ . '/Product.php';

class Food extends Product{

    private $quantity;
    private $expiration_date;

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getExpirationDate()
    {
        return $this->expiration_date;
    }

    public function setExpirationDate($expiration_date)
    {
        $this->expiration_date = $expiration_date;

        return $this;
    }
}
?>
