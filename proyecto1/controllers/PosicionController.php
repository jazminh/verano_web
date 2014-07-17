<?php
	class PosicionController{
		
		public $muestra_errores = false;
		function __construct(){
			
		}

		public function insertaPosicion($datos){
			echo "<pre>";
		 	print_r($datos);
		  	echo"</pre>";
			$posicion = new Posicion();
			$posicion->set_nombre($datos['nombre']);
			$posicion->set_nombre($datos['abreviatura']);
			if(count($posicion->errores)>0){
				print_r($posicion->errores);
			}
			die();
		}

	}
?>