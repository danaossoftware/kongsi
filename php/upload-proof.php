<?php
include 'db.php';
session_id("kongsicargo");
session_start();
$userId = $_SESSION["kongsicargo_user_id"];
$fileName = $_POST["file_name"];
$fileURL = "http://192.168.43.139/kongsi/userdata/imgs/" . $fileName;
move_uploaded_file($_FILES["file"]["tmp_name"], "../userdata/imgs/" . $fileName);
$results = $c->query("SELECT * FROM pending_top_up WHERE user_id='" . $userId . "'");
if ($results && $results->num_rows > 0) {
    return;
}
$c->query("INSERT INTO pending_top_up (id, user_id, proof_img, date) VALUES ('" . uniqid() . "', '" . $userId . "', '" . $fileURL . "', " . round(microtime(true)*1000) . ")");