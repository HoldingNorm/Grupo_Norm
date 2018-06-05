<?php 

class MvcController{

	public function pagina(){	
		
		include "views/template.php";
	} 
	public function enlacesPaginasController(){

		$enlaces = array();
		if (isset($_GET['action'])) {
			$enlaces = explode("/", $_GET["action"]);
		}
		else{
			$enlaces = "index?action=inicio";
		}
		$respuesta = Paginas::enlacesPaginasModel($enlaces);
		include $respuesta;
	}
	public function contactoController(){
		if (isset($_POST['sendCont'])) {
			$datosController = array("nombre"=>$_POST['nombreCont'], "email"=>$_POST['emailCont'], "telefono"=>$_POST['telefonoCont'], "empresa"=>$_POST['empresaCont'], "mensaje"=>$_POST['mensajeCont']);

			$email_to = "j.reyes@cecac.com.mx, ingluisfelipe07@gmail.com";

			$email_subject = "Contacto desde el sitio web CECAC ";

			$email_from = "contacto@cecac.com.mx/";

			$email_message = "Nombre: ".$_POST['nombreCont']."\nEmail: ".$_POST['emailCont']."\nEmpresa: ".$_POST['empresaCont']."\nTelefono: ".$_POST['telefonoCont']."\nMensaje: ".$_POST['mensajeCont'];
				
			$headers = 'From: '.$email_from."\r\n" .
			'Reply-To: '.$email_from."\r\n" .
			'X-Mailer: PHP/' . phpversion();
			mail($email_to, $email_subject, $email_message, $headers);

			echo '<p>Gracias por contactárnos</p>';
		} 
	}
	public function loginController(){
		if (isset($_POST["login"])) {
			$tablaController = "users";
			$userController = $_POST["user"];
			$passwordController = $_POST["password"];

			$respuesta = Datos::loginModel($tablaController, $userController);
			
			if ($respuesta["user"] == $userController && $respuesta["password"] == $passwordController) {
				switch ($respuesta["type"]) {
					case 'rh':
						session_start();
						$_SESSION["RH"]=true;
						header("location:rh");
						break;
					
					case 'prensa':
						session_start();
						$_SESSION["PRENSA"]=true;
						echo "PRENSA";
						break;

					case 'compras':
						session_start();
						$_SESSION["COMPRAS"]=true;
						echo "COMPRAS";
						break;
				}
			}else{
				echo "Usuario o Password no encontrado";
			}
		}else{
		}
	}
	public function vacantesController(){
		$tablaController = "vacantes";
		$respuesta = Datos::vacantesModel($tablaController);
		foreach ($respuesta as $datos ) {
			echo '<div class="col-md-4 col-sm-6 col-12">
					<a href="http://localhost/Grupo_Norm/vacante/'.$datos["url"].'">
						<img src="views/images/logo.png" alt="">
						<h4>'.$datos["titulo"].'</h4>
						<p>'.substr($datos["descripcion"], 0, 197).'...</p>
						<b>Numero de Vacantes: '.$datos["cantidad"].'</b>
					</a>
				</div>';
		}
	}
	public function vacanteController(){
		if (isset($_GET['action'])) {
			$enlaces = explode("/", $_GET["action"]);
		}
		$tablaController = "vacantes";
		$respuesta = Datos::vacanteModel($tablaController, $enlaces[1]);
			echo '<div class="row align-items-center">
						<div class="col-md-8 col-12">
							<h4>'.$respuesta["titulo"].'</h4>
						</div>
					</div>
					<div class="row vacante-body">
						<div class="col-md-8 col-12">
							<div class="row align-items-center">
								<div class="col-3">
									<img class="img-fluid" src="http://localhost/Grupo_Norm/views/images/';
									if ($respuesta["empresa"] == "norm") {
										echo "logo";
									}
									echo'.png" alt="">
								</div>
								<div class="col-9">
									<h4>';
									if ($respuesta["empresa"] == "norm") {
										echo "Industrias Norm";
									}else{}
									echo '</h4><p>';
									if ($respuesta["empresa"] == "norm") {
										echo "En Industrias Norm nos dedicamos al estampado, ensamblado de partes de lámina destinadas principalmente a la industria automotriz, nuestras instalaciones en Puebla cuentan con una superficie de 44,000 m2, damos empleo a más de 700 personas";
									}else{}
									echo '<br><br></p>
								</div>
								<div class="col-12">
									<div class="row">
										<div class="col-6">
											<b>Sobre la vacante</b>
										</div>
										<div class="col-6">
											<p>Fecha: '.$respuesta["fecha"].'</p>
										</div>
									</div><br>
									<div class="row">
										<div class="col-12">
											<b>Salario</b>
											<ul>
												<li>'.$respuesta["salario"].'</li>
											</ul>
										</div>
									</div>
									<div class="row">
										<div class="col-10">
											<p>'.$respuesta["descripcion"].'</p><br>
										</div><br><br>
										<div class="col-12">
											<p><b>Tipo de Jornada: </b>'.$respuesta["jornada"].'</p>
										</div><br><br>
										<div class="col-12">
											<p><b>Tipo de Contrato: </b>'.$respuesta["contrato"].'</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-12">
							<form method="post">
							  <div class="form-group">
							    <label for="formGroupExampleInput">Nombre:</label>
							    <input type="text" class="form-control" id="formGroupExampleInput">
							  </div>
							  <div class="form-group">
							    <label for="formGroupExampleInput2">Telefono:</label>
							    <input type="number" class="form-control" id="formGroupExampleInput2">
							  </div>
							  <div class="form-group">
							    <label for="formGroupExampleInput2">Email:</label>
							    <input type="email" class="form-control" id="formGroupExampleInput2">
							  </div>
							  <div class="form-group">
							    <label for="formGroupExampleInput2">Mensaje:</label>
							    <textarea name="mensaje" rows="3"></textarea>
							  </div>
							  <div class="form-group">
							    <input type="submit" value="Enviar" name="send">
							  </div>
							</form>
						</div>
					</div>';
	}
	public function noticiaController(){
		$tablaController = "noticias";
		if (isset($_GET['action'])) {
			$enlaces = explode("/", $_GET["action"]);
		}else{}

		$urlController = $enlaces[1];
		$respuesta = Datos::noticiaModel($tablaController, $urlController);

		echo '<img src="http://localhost/Grupo_Norm/views/images/noticias/'.$respuesta["imagen"].'" class="img-fluid">
			<h1>'.utf8_encode($respuesta["titulo"]).'</h1>
			<b>'.$respuesta["fecha"].'</b><br><br>
			<p>'.utf8_encode($respuesta["nota"]).'</p>';
	}
	public function noticiasController(){
		$tablaController = "noticias";
		$respuesta = Datos::noticiasModel($tablaController);
		echo '';
	}
	public function aplicanteController(){
		if (isset($_POST['send'])) {
			$nombreController = $_POST["nombre"];
		}else{

		}
	}
}
?>

