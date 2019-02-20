<?php
include 'db.php';
session_id("kongsicargo");
session_start();
unset($_SESSION["kongsicargo_user_id"]);
session_destroy();