<?php
require_once __DIR__ . '/classes/User.php';

$users = [
    new User("Mario", "Rossi", "mariorossi@mail.it", "free"),
    new User("John", "Doe", "johndoe@mail.com", "premium"),
    new User("Luca", "Bianchi", "lucabianchi@mail.it", "free"),
    new User("Luke", "White", "lukewhite@mail.com", "premium"),
];

header("Content-Type: application/json");

echo json_encode($users);