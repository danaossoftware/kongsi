<?php
include 'db.php';
session_id("kongsicargo");
session_start();
$userId = $_SESSION["kongsicargo_user_id"];
$amount = intval($_POST["amount"]);
$date = round(microtime(true)*1000);
$c->query("INSERT INTO pending_withdraw (id, user_id, amount, date, status) VALUES ('" . uniqid() . "', '" . $userId . "', " . $amount . ", " . $date . ", 'pending')");