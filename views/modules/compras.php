<?php
session_start();

if (!$_SESSION["COMPRAS"]) {
	header("location:login");
	exit();
}

include_once "menu.php";
$mvc = new MvcController();
echo "COMPRA";
?>