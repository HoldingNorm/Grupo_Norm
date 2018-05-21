<?php 

class Paginas{
	
	public function enlacesPaginasModel($enlaces){


		if($enlaces == "inicio"){

			$module =  "views/modules/".$enlaces.".php";
		
		}
		else{

			$module =  "views/modules/inicio.php";

		}
		
		return $module;

	}

}

?>