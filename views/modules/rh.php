<?php
session_start();

if (!$_SESSION["RH"]) {
	header("location:login");
	exit();
}

include_once "menu.php";
$mvc = new MvcController();
echo "RH";
?>