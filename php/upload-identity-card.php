<?php
include 'db.php';
session_id("kongsicargo");
session_start();
$userId = $_SESSION["kongsicargo_user_id"];
$fileName = $_POST["file_name"];
move_uploaded_file($_FILES["file"]["tmp_name"], "../userdata/imgs/" . $fileName);
$url = "http://103.103.175.239/kongsi/userdata/imgs/" . $fileName;
$c->query("UPDATE users SET identity_card_img='" . $url . "' WHERE id='" . $userId . "'");