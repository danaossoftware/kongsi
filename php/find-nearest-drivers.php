<?php
include 'db.php';
$lat = doubleval($_GET["lat"]);
$lng = doubleval($_GET["lng"]);
$results = $c->query("SELECT * SQRT(POW(69.1 * (latitude - -7.4048587), 2) + POW(69.1 * (112.6756789 - longitude) * COS(latitude / 57.3), 2)) AS distance FROM drivers HAVING distance < 25");
$users = [];
if ($results && $results->num_rows > 0) {
	while ($row = $results->fetch_assoc()) {
		if ($row["position"] == 1) {
			array_push($users, $row);
		}
	}
}
echo json_encode($users);