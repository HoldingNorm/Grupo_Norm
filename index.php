<!-- 
	Developed by TechDev
	Twitter: @elKanji-->
<?php
header('Content-Type: text/html; charset=utf-8');
require_once "models/enlaces.php";
require_once "models/crud.php";
require_once "controllers/controller.php";

$mvc = new MvcController();
$mvc -> pagina();

?>