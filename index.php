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

$new_product = new Product(null, 'Test', 'Lorem ipsum', 10.50, 'Acme', 'image.jpg');
$new_product_2 = new Product(null, 'Test2', 'Lorem ipsum few', 11, 'Acme2', 'image2.jpg');

var_dump($new_product, $new_product_2);
?>

