<?php
	class PaisController{
		
		public $muestra_errores = false;
		function __construct(){
			
		}

		public function insertaPais($datos,$archivo){
			echo "<pre>datos:";
		 	print_r($datos);
		 	print_r($archivo);
		  	echo"</pre>";
			$pais = new Pais();
			$pais->set_nombre($datos['nombre']);
			$pais->set_bandera($archivo['bandera']);
			$pais->set_idcontinente($datos['idcontinente']);
			
			if(count($pais->errores)>0){
				print_r($pais->errores);
				die();
			}else{
				move_uploaded_file($archivo['bandera']['tmp_name'],
					"../im/".$archivo['bandera']['name']);

			}
			
			$pais->inserta($pais->get_atributos());
			die();
			
		}

	}
?>