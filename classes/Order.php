<?php

class Order {

    public function __construct($id, Cart $cart, Customer $customer) {
        $this->id = strtoupper($id);
        $this->cart = $cart;
        $this->customer = $customer;
        $this->total = $this->cart->getTotal();
        $this->status = 0;
    }
}

?>
