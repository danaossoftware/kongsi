<?php
include 'db.php';
$email = $_POST["email"];
$c->query("UPDATE users SET confirmed=1 WHERE email='" . $email . "'");