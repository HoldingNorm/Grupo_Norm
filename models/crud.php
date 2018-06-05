<?php
require_once "conexion.php";

class Datos extends Conexion{
	public function loginModel($tabla, $userModel){
		$stmt = Conexion::conectar()->prepare("SELECT user, password, type FROM $tabla WHERE user = :user");

		$stmt->bindParam(":user", $userModel, PDO::PARAM_STR);
		$stmt->execute(); 

		return $stmt->fetch();

		$stmt->close();
	}
	public function vacantesModel($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT salario, titulo, descripcion, url, fecha, contrato, jornada, empresa, cantidad FROM $tabla WHERE activa = 1");

		$stmt->execute(); 
		return $stmt->fetchAll();
		$stmt->close();
	}
	public function vacanteModel($tabla, $urlModel){
		$stmt = Conexion::conectar()->prepare("SELECT salario, titulo, descripcion, fecha, contrato, jornada, empresa, cantidad FROM $tabla WHERE url = :url");

		$stmt->bindParam(":url", $urlModel, PDO::PARAM_STR);
		$stmt->execute(); 

		return $stmt->fetch();

		$stmt->close();

	}
	public function noticiaModel($tabla, $urlModel){
		$stmt = Conexion::conectar()->prepare("SELECT fecha, nota, titulo, imagen FROM $tabla WHERE url = :url");

		$stmt->bindParam(":url", $urlModel, PDO::PARAM_STR);
		$stmt->execute(); 

		return $stmt->fetch();

		$stmt->close();

	}
	public function noticiasModel($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT fecha, nota, titulo, imagen FROM $tabla");

		$stmt->bindParam(":url", $urlModel, PDO::PARAM_STR);
		$stmt->execute(); 

		return $stmt->fetchAll();

		$stmt->close();
	}
}
?>