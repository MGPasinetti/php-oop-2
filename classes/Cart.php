<?php
class Cart {
    private $items;
    private $total;

    public function __construct() {
        $this->items = [];
        $this->total = 0.00;
    }

    public function setItems($items) {
        $this->items = $items;
    }

    public function setTotal($value) {
        $this->total = $value;
    }

    public function getItems() {
        return $this->items;
    }

    public function getTotal() {
        return $this->total;
    }

    private function hasItems() {
        return ( count( $this->items ) > 0 );
    }
}

?>
