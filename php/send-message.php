<?php
include 'db.php';
$messageId = uniqid();
$senderId = $_POST["sender_id"];
$receiverId = $_POST["receiver_id"];
$message = $_POST["message"];
$title = $_POST["title"];
$date = round(microtime(true)*1000);
$c->query("INSERT INTO messages (id, sender_id, receiver_id, title, message, date) VALUES ('" . $messageId . "', '" . $senderId . "', '" . $receiverId . "', '" . $title . "', '" . $message . "', " . $date . ")");
echo $messageId;