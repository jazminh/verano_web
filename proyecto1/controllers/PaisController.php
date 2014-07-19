<?php
	class PaisController extends Pais{
		
		public $muestra_errores = false;
		function __construct(){
			parent::Pais();
			
		}

		public function insertaPais($datos,$archivo){
			
			
			$this->set_nombre($datos['nombre']);
			$this->set_bandera($archivo['bandera']);
			$this->set_idcontinente($datos['idcontinente']);
			
			if(count($this->errores)>0){
				$this->muestra_errores=true;
				
			}else{
				move_uploaded_file($archivo['bandera']['tmp_name'],
					"../im/".$archivo['bandera']['name']);

				$this->inserta($this->get_atributos());
			}
			
			
			
			
		}

	}
?>