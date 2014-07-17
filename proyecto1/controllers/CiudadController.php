<?php
	class CiudadController{
		
		public $muestra_errores = false;
		function __construct(){
			
		}

		public function insertaCiudad($datos){
			echo "<pre>";
		 	print_r($datos);
		  	echo"</pre>";
			$ciudad = new Ciudad();
			$ciudad->set_nombre($datos['nombre']);
			
			if(count($ciudad->errores)>0){
				print_r($ciudad->errores);
			}
			die();
		}

	}
?>