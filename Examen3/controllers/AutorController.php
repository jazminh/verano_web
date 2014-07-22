<?php
	class AutorController extends Autor{
		public $muestra_errores = false;
		function __construct(){
			 parent::Autor();
		}
		public function insertaAutor($datos){
			$this->set_nombre($datos['nombre']);
			$this->set_apellidos($datos['apellidos']);
			$this->set_email($datos['email']);
			if (count($this->errores)>0) {
				print_r($this->errores);
			}else{
			$this->inserta($this->get_atributos());}
		}
	}
?>