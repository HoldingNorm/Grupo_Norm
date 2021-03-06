<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Grupo Industrial Norm">
	<meta name="robots" content="index, follow">
	<link rel="shortcut icon" type="image/png" href="views/images/favicon.png"/>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php $_SERVER["HTTP_HOST"]; ?>/Grupo_Norm/views/css/slick/slick.css">
	<link rel="stylesheet" href="<?php $_SERVER["HTTP_HOST"]; ?>/Grupo_Norm/views/css/slick/slick-theme.css">
	<link rel="stylesheet" href="<?php $_SERVER["HTTP_HOST"]; ?>/Grupo_Norm/views/css/styles.css">
	<title>Grupo Industrial Norm.</title>


</head>

<body>

<?php 

$mvc = new MvcController();
$mvc -> enlacesPaginasController();
include "views/modules/footer.php"
 ?>

	<!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="<?php $_SERVER["HTTP_HOST"]; ?>/Grupo_Norm/views/css/slick/slick.min.js"></script>
  <script src="<?php $_SERVER["HTTP_HOST"]; ?>/Grupo_Norm/views/js/main.js"></script>

</body>

</html>