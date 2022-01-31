<?php
require_once __DIR__ . '/../classes/Product.php';

$products = [
    new Product("abbigliamento", "scarpe", "Nike", "Lorem ipsum dolor sit amet consectetur.", 49.99),
    new Product("abbigliamento", "giacca", "Nike", "Lorem ipsum dolor sit amet consectetur.", 39.99),
    new Product("abbigliamento", "pantaloni", "Levi's", "Lorem ipsum dolor sit amet consectetur.", 65.99),
    new Product("abbigliamento", "camicia", "The North Face", "Lorem ipsum dolor sit amet consectetur.", 47.99),
    new Product("abbigliamento", "maglietta", "Adidas", "Lorem ipsum dolor sit amet consectetur.", 29.99),
    new Product("abbigliamento", "scarpe", "New Balance", "Lorem ipsum dolor sit amet consectetur.", 47.99),
    new Product("abbigliamento", "occhiali", "Ray Ban", "Lorem ipsum dolor sit amet consectetur.", 129.99),
];

$userType = $_GET["user"];

foreach ($products as $product) {
    $product->setDiscount($userType);
}

header("Content-Type: application/json");

echo json_encode($products);