<?php
include 'db.php';
session_id("kongsicargo");
session_start();
$userId = $_SESSION["kongsicargo_user_id"];
$c->query("UPDATE users SET current_order_id='' WHERE id='" . $userId . "'");