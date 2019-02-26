<?php
include 'db.php';
session_id("kongsicargo");
session_start();
$userId = $_SESSION["kongsicargo_user_id"];
$reason = $_POST["reason"];
$results = $c->query("SELECT * FROM users WHERE id='" . $userId . "'");
if ($results && $results->num_rows > 0) {
	$row = $results->fetch_assoc();
	$orderId = $row["current_order_id"];
	$results2 = $c->query("SELECT * FROM orders WHERE id='" . $orderId . "'");
	if ($results2 && $results2->num_rows > 0) {
		$row2 = $results2->fetch_assoc();
		$driverId = $row2["driver_id"];
		$c->query("INSERT INTO cancelled_orders_by_user (id, user_id, driver_id, order_id, reason, date) VALUES ('" . uniqid() . "', '" . $userId . "', '" . $driverId . "', '" . $orderId . "', '" . $reason . "', " . round(microtime(true)*1000) . ")");
	}
}
$c->query("UPDATE users SET current_order_id='' WHERE id='" . $userId . "'");