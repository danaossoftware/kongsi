<?php
include 'db.php';
session_id("kongsicargo");
session_start();
$userId = $_SESSION["kongsicargo_user_id"];
$results = $c->query("SELECT * FROM balance WHERE user_id='" . $userId . "'");
if ($results && $results->num_rows > 0) {
    $row = $results->fetch_assoc();
    echo $row["balance"];
} else {
    echo 0;
}