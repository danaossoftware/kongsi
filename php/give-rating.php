<?php
include 'db.php';
session_id("kongsicargo");
session_start();
$userId = $_SESSION["kongsicargo_user_id"];
$driverId = $_POST["driver_id"];
$rating = intval($_POST["rating"]);
$c->query("INSERT INTO ratings (id, user_id, driver_id, rating, date) VALUES ('" . uniqid() . "', '" . $userId . "', '" . $driverId . "', " . $rating . ", " . round(microtime(true)*1000) . ")");