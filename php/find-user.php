<?php
include 'db.php';
$user = $_POST["user"];
$c->query("SELECT * FROM users WHERE name LIKE '%" . $user . "%' OR email LIKE '%" . $user . "%'");