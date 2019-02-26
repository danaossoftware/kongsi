<?php
include 'db.php';
session_id("kongsicargo");
session_start();
$fromId = $_SESSION["kongsicargo_user_id"];
$toId = $_POST["to"];
$amount = intval($_POST["amount"]);
$c->query("INSERT INTO fund_transfers (id, from_id, to_id, amount, date, status) VALUES ('" . uniqid() . "', '" . $fromId . "', '" . $toId . "', " . $amount . ", " . round(microtime(true)*1000) . ", 'pending')");