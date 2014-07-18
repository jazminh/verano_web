<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Equipo.php');
  include ('../../controllers/EquipoController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');




  if (isset($_POST['nombre'])){
  	$equipoC=new EquipoController();
  	
  	
  	$equipoC->insertaEquipo($_POST,$_FILES);

	}


?>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">



				<?php

				//TAREA UBICAR ESE BLOQUE  EN UNA CLASE Y CONVERTIRLO EN FUNCION
				if ($equipoC->muestra_errores) {

				?>

				<div class="alert alert-danger">
					<?php
						foreach ($equipoC->errores as $value) {
							echo "<p>error: $value</p>";
							
						}
					?>
				</div>

				<?php

					
				}

				?>

				

						<form role="form" action="" method="POST" enctype="multipart/form-data">
						  <div class="form-group">
						    <label for="nombre">Registro de equipo</label>
						    <input type="text" class="form-control" id="nombre"  name="nombre" placeholder="nombre" value="<?php echo $equipoC->get_nombre();?>">
						  </div>
						  <div class="form-group">
						    <label for="escudo">Escudo</label>
						    <input type="file" class="form-control" id="escudo" name="escudo" placeholder="escudo">
						  </div>
						  <div class="form-group">
						   	<select class="form-control " id="idpais" name="idpais">
						   		<option value="1">1</option>
						   		<option value="2">2</option>
						   		<option value="3">3</option>
						   		<option value="4">4</option>
						   		<option value="5">5</option>

						   		
						   	</select>
						  </div>
						  <div class="checkbox">
						    <label>
						      <input type="checkbox"> Check me out
						    </label>
						  </div>

						  <button type="submit" class="btn btn-default">Submit</button>
						</form>
										
			</div>
			
		</div>




<?php include ('../layouts/footer.php'); ?>
