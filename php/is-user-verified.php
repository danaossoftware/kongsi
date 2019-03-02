<?php
include 'db.php';
session_id("kongsicargo");
session_start();
$driverId = $_SESSION["kongsicargo_user_id"];
$results = $c->query("SELECT * FROM users WHERE id='" . $driverId . "'");
if ($results && $results->num_rows > 0) {
	$row = $results->fetch_assoc();
	echo $row["verified"];
} else {
	echo 0;
}