<?php
include 'db.php';
session_id("kongsicargo");
session_start();
$userId = $SESSION["kongsicargo_user_id"];
$results = $c->query("SELECT * FROM purchase_history WHERE user_id='" . $userId . "'");
$purchases = [];
if ($results && $results->num_rows > 0) {
	while ($row = $results->fetch_assoc()) {
		array_push($purchases, $row);
	}
}
echo json_encode($purchases);