<?php
include 'db.php';
$lat = doubleval($_POST["lat"]);
$lng = doubleval($_POST["lng"]);
session_id("kongsidriver");
session_start();
$userId = $_SESSION["kongsidriver_user_id"];
$c->query("UPDATE users SET latitude=" . $lat . ", longitude=" . $lng . " WHERE id='" . $userId . "'");