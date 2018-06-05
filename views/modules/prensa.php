<?php
session_start();

if (!$_SESSION["PRENSA"]) {
	header("location:login");
	exit();
}

include_once "menu.php";
$mvc = new MvcController();
echo "PRENSA";
?>