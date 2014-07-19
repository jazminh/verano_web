



<?php
				//TAREA UBICAR ESE BLOQUE  EN UNA CLASE Y CONVERTIRLO EN FUNCION
				if ($variableC->muestra_errores) {



				echo '<div class="alert alert-danger">';
					
						foreach ($variableC->errores as $value) {
							echo "<p>error: $value</p>";
							
						}
					
				echo '</div>';

				

					
				}
			

				?>


