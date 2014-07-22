<?php
	class StatusController extends Status{
		public $muestra_errores = false;
		function __construct(){
			 parent::Status();
		}
		public function insertaStatus($datos){
			$this->set_status($datos['status']);
			if (count($this->errores)>0) {
				print_r($this->errores);
			}else{
			$this->inserta($this->get_atributos());}
		}
	}
?>