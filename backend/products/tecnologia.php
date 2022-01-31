<?php
require_once __DIR__ . '/../classes/Product.php';

$products = [
    new Product("tecnologia", "computer", "Apple", "Lorem ipsum dolor sit amet consectetur.", 1549.99),
    new Product("tecnologia", "telefono", "Samsung", "Lorem ipsum dolor sit amet consectetur.", 999.99),
    new Product("tecnologia", "televisione", "LG", "Lorem ipsum dolor sit amet consectetur.", 459.99),
    new Product("tecnologia", "radio", "SONY", "Lorem ipsum dolor sit amet consectetur.", 109.99),
    new Product("tecnologia", "reflex", "Canon", "Lorem ipsum dolor sit amet consectetur.", 599.99),
    new Product("tecnologia", "tablet", "Huawei", "Lorem ipsum dolor sit amet consectetur.", 499.99),
];

$userType = $_GET["user"];

foreach ($products as $product) {
    $product->setDiscount($userType);
}

header("Content-Type: application/json");

echo json_encode($products);