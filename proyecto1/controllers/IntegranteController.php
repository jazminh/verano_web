<?php
	class IntegranteController{
		
		public $muestra_errores = false;
		function __construct(){
			
		}

		public function insertaIntegrante($datos){
			echo "<pre>";
		 	print_r($datos);
		  	echo"</pre>";
			$integrante = new Integrante();
			$integrante->set_nombre($datos['nombre']);
			$integrante->set_apellido($datos['apellido']);
			$integrante->set_peso($datos['peso']);
			$integrante->set_estatura($datos['estatura']);
			$integrante->set_foto($datos['foto']);
			$integrante->set_Edad($datos['Edad']);
			$integrante->set_idequipo($datos['idequipo']);
			if(count($integrante->errores)>0){
				print_r($integrante->errores);
			}
			die();
		}

	}
?>