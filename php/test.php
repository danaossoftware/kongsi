<?php
include 'db.php';
session_id("kongsicargo");
session_start();
$userId = "5c6141104ffe3";
$orderId = uniqid();
$c->query("INSERT INTO orders (id) VALUES ('" . $orderId . "')");
$c->query("UPDATE users SET current_order_id='" . $orderId . "' WHERE id='" . $userId . "'");