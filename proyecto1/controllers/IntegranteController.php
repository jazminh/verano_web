<?php
	class IntegranteController{
		
		public $muestra_errores = false;
		function __construct(){
			
		}

		public function insertaIntegrante($datos,$archivo){
			echo "<pre>";
		 	print_r($datos);
		 	print_r($archivo);
		  	echo"</pre>";
			$integrante = new Integrante();
			$integrante->set_nombre($datos['nombre']);
			$integrante->set_apellido($datos['apellido']);
			$integrante->set_peso($datos['peso']);
			$integrante->set_estatura($datos['estatura']);
			$integrante->set_foto($archivo['foto']);
			$integrante->set_edad($datos['edad']);
			$integrante->set_idequipo($datos['idequipo']);
			if(count($integrante->errores)>0){
				print_r($integrante->errores);
				die();
				
			}else{
				move_uploaded_file($archivo['foto']['tmp_name'],
					"../im/".$archivo['foto']['name']);

			}
			$integrante->inserta($integrante->get_atributos());
			die();
		}

	}
?>