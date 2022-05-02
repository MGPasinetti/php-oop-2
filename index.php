<!--
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.

BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).
-->

<?php

include_once __DIR__ . '/classes/Product.php';
include_once __DIR__ . '/classes/Accessory.php';
include_once __DIR__ . '/classes/Food.php';
include_once __DIR__ . '/classes/Kennel.php';
include_once __DIR__ . '/classes/Toy.php';
include_once __DIR__ . '/classes/Customer.php';
include_once __DIR__ . '/classes/Cart.php';
include_once __DIR__ . '/classes/Order.php';

$new_product = new Product(null, 'Test', 'Lorem ipsum', 10.50, 'Acme', 'image.jpg');
$new_product_2 = new Product(null, 'Test2', 'Lorem ipsum few', 11, 'Acme2', 'image2.jpg');

$new_accesory = new Accessory(null, 'Guinzaglio', 'lorem ipsum', 15, 'dsfwef', 'image.jpg', 'very good');

var_dump($new_product, $new_product_2, $new_accesory);

?>

