<?php
include 'db.php';
session_id("kongsicargo");
session_start();
$userId = $_SESSION["kongsicargo_user_id"];
$results = $c->query("SELECT * FROM users WHERE id='" . $userId . "'");
if ($results && $results->fetch_assoc()) {
	$row = $results->fetch_assoc();
	$currentOrderID = $row["current_order_id"];
	if ($currentOrderID != "") {
		$c->query("DELETE FROM orders WHERE id='" . $currentOrderID . "'");
	}
}
$c->query("UPDATE users SET current_order_id='' WHERE id='" . $userId . "'");