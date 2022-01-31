<?php
require_once __DIR__ . '/classes/CreditCard.php';

$card = new CreditCard();

$verification = 0;

// Prova inserimento numero carta
try {
    $card->setCardNumber($_POST['cardNumber']);
    $verification++;
} catch (Exception $e) {
    echo $e->getMessage();
    $verification = 0;
}

// Prova inserimento data
try {
    $card->setExpiry($_POST['month'], $_POST['year']);
    $verification++;
} catch (Exception $e) {
    echo $e->getMessage();
    $verification = 0;
}

// Prova inserimento cvv
try {
    $card->setCvv($_POST['cvv']);
    $verification++;
} catch (Exception $e) {
    echo $e->getMessage();
    $verification = 0;
}

var_dump($card);

if ($verification === 3) {
    echo "Acquisto effettuato";
}