<?php
require_once __DIR__ . '/classes/User.php';

$users = [
    new User("Mario", "Rossi", "mariorossi@mail.it", "free"),
    new User("John", "Doe", "johndoe@mail.it", "premium"),
    new User("Luca", "Bianchi", "lucabianchi@mail.it", "free"),
];

header("Content-Type: application/json");

echo json_encode($users);