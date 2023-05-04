<?php

if (empty($_POST(["username"]))) {
    die("Username Required");
}

if (strlen($_POST["password"]) < 5){
    die("Password must be at least 5 characters");
}

$mysqli = require __DIR__ . "/connection.php";
print_r($_POST);
