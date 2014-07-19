<?php
	class RevistaController extends Revista{
		
		public $muestra_errores = false;
		function __construct(){
			parent::Revista();
		}

		public function insertaRevista($datos,$archivo){
			
			$this->set_nombre($datos['nombre']);
			$this->set_portada($archivo['portada']);
			$this->set_fecha($datos['fecha']);
			$this->set_volumen($datos['volumen']);
			$this->set_titulo($datos['titulo']);
			$this->set_subtitulo($datos['subtitulo']);
			$this->set_numero($datos['numero']);
			$this->set_clave($datos['clave']);
			$this->set_directorio($datos['directorio']);
			$this->set_editorial($datos['editorial']);
			$this->set_id_status($datos['id_status']);
			
			if(count($this->errores)>0){
				$this-> muestra_errores=true;
			}else{
				move_uploaded_file($archivo['portada']['tmp_name'],
					"../im/".$archivo['portada']['name']);
				$this->inserta($this->get_atributos());

			}
			
			
		}

	}
?>