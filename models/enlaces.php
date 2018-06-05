<?php 

class Paginas{
	
	public function enlacesPaginasModel($enlaces){


		if($enlaces[0] == "inicio" || $enlaces[0] == "noticias" || $enlaces[0] == "nosotros" || $enlaces[0] == "login" || $enlaces[0] == "rh" || $enlaces[0] == "compras" || $enlaces[0] == "vacantes" || $enlaces[0] == "prensa" || $enlaces[0] == "vacante" || $enlaces[0] == "noticia"){

			$module =  "views/modules/".$enlaces[0].".php";
		
		}
		else{

			$module =  "views/modules/inicio.php";

		}
		
		return $module;

	}

}

?>