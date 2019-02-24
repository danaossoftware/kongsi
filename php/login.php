<?php
include 'db.php';
$email = $_POST["email"];
$password = $_POST["password"];
$results = $c->query("SELECT * FROM users WHERE email='" . $email . "'");
if ($results && $results->num_rows > 0) {
	$row = $results->fetch_assoc();
	if ($row["password"] != $password) {
		echo -2;
		return;
	}
	if ($row["confirmed"] == 0) {
		echo -3;
		return;
	}
	session_start();
	$_SESSION["kongsicargo_user_id"] = $row["id"];
	$params = session_get_cookie_params();
	setcookie(session_name(), $_COOKIE[session_name()], time() + 7*24*3600, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
	echo 0;
} else {
	echo -1;
}