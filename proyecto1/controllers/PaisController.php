<?php
	class PaisController{
		
		public $muestra_errores = false;
		function __construct(){
			
		}

		public function insertaPais($datos){
			echo "<pre>";
		 	print_r($datos);
		  	echo"</pre>";
			$pais = new Pais();
			$pais->set_nombre($datos['nombre']);
			$pais->set_nombre($datos['bandera']);
			$pais->set_nombre($datos['idcontinente']);
			
			if(count($pais->errores)>0){
				print_r($pais->errores);
			}
			die();
		}

	}
?>