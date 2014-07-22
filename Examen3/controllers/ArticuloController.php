<?php
	class ArticuloController extends Articulo{
		
		public $muestra_errores = false;
		function __construct(){
			parent::Articulo();
			
		}

		public function insertaArticulo($datos){
			$this->set_nombre($datos['nombre']);
			$this->set_archivo_pdf($datos['archivo_pdf']);
			$this->set_id_status($datos['id_status']);
			if (count($this->errores)>0)   {
				$this-> muestra_errores=true;
			}
			else {
				move_uploaded_file($archivos['archivo_pdf']['tmp_name'],
					"../img/".$archivos['archivo_pdf']['name']);
				$this->inserta($this->get_atributos());
			}
		}

	}
?>