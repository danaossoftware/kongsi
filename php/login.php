<?php
include 'db.php';
$phone = $_POST["phone"];
$pin = $_POST["pin"];
$results = $c->query("SELECT * FROM users WHERE phone='" . $phone . "'");
if ($results && $results->num_rows > 0) {
	$row = $results->fetch_assoc();
	if ($row["pin"] != $pin) {
		echo -2;
		return;
	}
	if ($row["confirmed"] == 0) {
		echo -3;
		return;
	}
	session_id("kongsicargo");
	session_start();
	$_SESSION["kongsicargo_user_id"] = $row["id"];
	$params = session_get_cookie_params();
	setcookie(session_name(), $_COOKIE[session_name()], time() + 7*24*3600, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
	echo 0;
} else {
	echo -1;
}