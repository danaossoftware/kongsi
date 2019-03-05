<?php
include 'db.php';
$userId = $_POST["user_id"];
$driverId = $_POST["driver_id"];
$rating = intval($_POST["rating"]);
$c->query("INSERT INTO ratings (id, user_id, driver_id, rating, date) VALUES ('" . uniqid() . "', '" . $userId . "', '" . $driverId . "', " . $rating . ", " . round(microtime(true)*1000) . ")");