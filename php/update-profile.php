<?php
include 'db.php';
session_id("kongsicargo");
session_start();
$userId = $_SESSION["kongsicargo_user_id"];
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$referral = $_POST["referral"];
$results = $c->query("SELECT * FROM users WHERE email='" . $email . "' AND id <> '" . $userId . "'");
if ($results && $results->num_rows > 0) {
	echo -1;
	return;
}
$results = $c->query("SELECT * FROM users WHERE phone='" . $phone . "' AND id <> '" . $userId . "'");
if ($results && $results->num_rows > 0) {
	echo -2;
	return;
}
$c->query("UDPATE users SET name='" . $name . "', email='" . $email . "', phone='" . $phone . "', address='" . $address . "', referral='" . $referral . "' WHERE id='" . $userId . "'");
echo 0;