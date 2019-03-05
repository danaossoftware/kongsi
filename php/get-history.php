<?php
include 'db.php';
$userId = $_POST["user_id"];
$results = $c->query("SELECT * FROM orders WHERE user_id='" . $userId . "' AND status='done'");
$history = [];
if ($results && $results->num_rows > 0) {
	while ($row = $results->fetch_assoc()) {
		array_push($history, $row);
	}
}
echo json_encode($history);