<?php
include 'db.php';
session_id("kongsicargo");
session_start();
$userId = $_SESSION["kongsicargo_user_id"];
$c->query("DELETE FROM orders WHERE user_id='" . $userId . "' AND status='waiting'");