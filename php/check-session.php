<?php
session_id("kongsicargo");
session_start();
if (isset($_SESSION["kongsicargo_user_id"]) && $_SESSION["kongsicargo_user_id"] != "") {
	echo 0;
} else {
	echo -1;
}