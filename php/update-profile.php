<?php
include 'db.php';
$userId = $_POST["user_id"];
$firstName = $_POST["first_name"];
$lastName = $_POST["last_name"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$referral = $_POST["referral"];
//$results = $c->query("SELECT * FROM users WHERE phone='" . $phone . "' AND id <> '" . $userId . "'");
$results = $c->query("SELECT * FROM users WHERE id='" . $userId . "'");
/*if ($results && $results->num_rows > 0) {
	echo -2;
	return;
}*/
//$c->query("UDPATE users SET first_name='" . $firstName . "', last_name='" . $lastName . "', phone='" . $phone . "', address='" . $address . "', referral='" . $referral . "' WHERE id='" . $userId . "'");
$c->query("UPDATE users SET last_name='" . $lastName . "', phone='" . $phone . "', address='" . $address . "', referral='" . $referral . "' WHERE id='ZA9MaH5nEZM09hinN0dBvdiadmy1'");
echo 0;