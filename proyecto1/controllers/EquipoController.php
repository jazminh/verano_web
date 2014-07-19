<?php
	class EquipoController extends Equipo{
		
		public $muestra_errores = false;
		function __construct(){
			parent::Equipo();
		}


		Public function funcion($variableC){
				//TAREA UBICAR ESE BLOQUE  EN UNA CLASE Y CONVERTIRLO EN FUNCION
				if ($variableC->muestra_errores) {



				echo '<div class="alert alert-danger">';
					
						foreach ($variableC->errores as $value) {
							echo "<p>error: $value</p>";
							
						}
					
				echo '</div>';

				

					
				}
			}

		public function insertaEquipo($datos,$archivo){

			

			


			$this->set_nombre($datos['nombre']);
			$this->set_idpais($datos['idpais']);
			$this->set_escudo($archivo['escudo']);





			if(count($this->errores)>0){
				//print_r($equipo->errores);
				$this->muestra_errores=true;

				
			}else{
				move_uploaded_file($archivo['escudo']['tmp_name'],
					"../im/".$archivo['escudo']['name']);
				$this->inserta($this->get_atributos());

			}
			
			
			
		}
		
		

	}


?>