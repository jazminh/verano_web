<?php
	class IndiceArticuloController extends IndiceArticulo{
		
		public $muestra_errores = false;
		function __construct(){
			parent::IndiceArticulo();
			
		}

		public function insertaIndiceArticulo($datos){
			
			$this->set_id_indice($datos['id_indice']);
			$this->set_id_articulo($datos['id_articulo']);
			$this->set_numero($datos['numero']);
			
			if(count($this->errores)>0){
				$this->muestra_errores=true;
			}
			else
			{
				$this->inserta($this->get_atributos());
			}
		}

	}
?>