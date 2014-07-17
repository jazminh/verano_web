<?php
	class EstadioController{
		
		public $muestra_errores = false;
		function __construct(){
			
		}

		public function insertaEstadio($datos){
			echo "<pre>";
		 	print_r($datos);
		  	echo"</pre>";
			$estadio = new Estadio();
			$estadio->set_Nombre($datos['Nombre']);
			$estadio->set_idciudad($datos['idciudad']);
			if(count($estadio->errores)>0){
				print_r($estadio->errores);
			}
			die();
		}

	}
?>