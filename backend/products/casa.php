<?php
require_once __DIR__ . '/../classes/Product.php';

$products = [
    new Product("casa", "quadro", "IKEA", "Lorem ipsum dolor sit amet consectetur.", 49.99),
    new Product("casa", "sedia", "IKEA", "Lorem ipsum dolor sit amet consectetur.", 29.99),
    new Product("casa", "tavolo", "IKEA", "Lorem ipsum dolor sit amet consectetur.", 99.99),
    new Product("casa", "poltrona", "IKEA", "Lorem ipsum dolor sit amet consectetur.", 109.99),
    new Product("casa", "scrivania", "IKEA", "Lorem ipsum dolor sit amet consectetur.", 199.99),
];

$userType = $_GET["user"];

foreach ($products as $product) {
    $product->setDiscount($userType);
}

header("Content-Type: application/json");

echo json_encode($products);