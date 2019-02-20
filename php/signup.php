<?php
include 'db.php';
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$phone = utf8_decode(urldecode($_POST["phone"]));
$results = $c->query("SELECT * FROM users WHERE email='" . $email . "'");
if ($results && $results->num_rows > 0) {
	echo -1;
} else {
	$results = $c->query("SELECT * FROM users WHERE phone='" . $phone . "'");
	if ($results && $results->num_rows > 0) {
		echo -2;
		return;
	}
	$userId = uniqid();
	$c->query("INSERT INTO users (id, email, password, phone, name) VALUES ('" . $userId . "', '" . $email . "', '" . $password . "', '" . $phone . "', '" . $name . "')");
	echo 0;
}