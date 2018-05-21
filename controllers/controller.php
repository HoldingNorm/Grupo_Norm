<?php 

class MvcController{

	public function pagina(){	
		
		include "views/template.php";
	} 
	public function enlacesPaginasController(){

		if(isset( $_GET['action'])){
			$enlaces = $_GET['action'];
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
}

?>

