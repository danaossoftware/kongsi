<?php
include 'db.php';
while (true) {
	$randomCode = uniqid();
	$randomCode = substr($randomCode, 0, 5);
	$results = $c->query("SELECT * FROM referral_codes WHERE code='" . $randomCode . "'");
	if ($results && $results->num_rows > 0) {
		continue;
	} else {
		echo $randomCode;
		return;
	}
}