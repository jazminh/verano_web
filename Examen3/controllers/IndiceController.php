<?php
	class IndiceController extends Indice{
		
		public $muestra_errores = false;
		function __construct(){
			parent::Indice();
		}

		public function insertaIndice($datos){
			$this->set_titulo($datos['titulo']);
			$this->set_numero($datos['numero']);
			$this->set_id_revista($datos['id_revista']);
			
  			 if (count($this->errores)>0) {
                //print_r($pais->errores); //esto no lo debe ver el usuario
                $this->muestra_errores = true;

               //die();
            }
            else{
               
                   $this->inserta($this->get_atributos());
            }
		}

		

	}
?>