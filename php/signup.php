<?php
include 'db.php';
$name = $_POST["name"];
$pin = $_POST["pin"];
$phone = utf8_decode(urldecode($_POST["phone"]));
$results = $c->query("SELECT * FROM users WHERE phone='" . $phone . "'");
if ($results && $results->num_rows > 0) {
    echo -2;
    return;
}
$userId = uniqid();
$c->query("INSERT INTO users (id, pin, phone, name) VALUES ('" . $userId . "', '" . $pin . "', '" . $phone . "', '" . $name . "')");
echo 0;