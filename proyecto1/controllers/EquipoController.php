<?php
	class EquipoController{
		
		public $muestra_errores = false;
		function __construct(){
			
		}

		public function insertaEquipo($datos,$archivo){

			echo "<pre>datos:";
		 	print_r($datos);
		 	print_r($archivo);
		  	echo"</pre>";

			$equipo = new Equipo();


			$equipo->set_nombre($datos['nombre']);
			$equipo->set_idpais($datos['idpais']);
			$equipo->set_escudo($archivo['escudo']);





			if(count($equipo->errores)>0){
				print_r($equipo->errores);
				die();
				
			}else{
				move_uploaded_file($archivo['escudo']['tmp_name'],
					"../im/".$archivo['escudo']['name']);

			}
			
			//$equipo->inserta($equipo->get_atributos());
		}
		
		

	}


?>