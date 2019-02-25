<?php
include 'db.php';
$keyword = $_POST["keyword"];
$c->query("SELECT * FROM users WHERE name LIKE '%" . $keyword . "%' OR email LIKE '%" . $keyword . "%'");