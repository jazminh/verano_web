<?php 
  include ('../../libs/security.php');
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Equipo.php');
  include ('../../controllers/EquipoController.php');
  include ('../../libs/Er.php');

 
  include ('../layouts/header.php');


$variableC=new EquipoController();

  if (isset($_POST['nombre'])){
  	
  	
  	
  	$variableC->insertaEquipo($_POST,$_FILES);

	}




?>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">

<?php
 include ('../../libs/funcion.php');
 ?>

				

						<form role="form" action="" method="POST" enctype="multipart/form-data">
						  <div class="form-group">
						    <label for="nombre">Registro de equipo</label>
						    <input type="text" class="form-control" id="nombre"  name="nombre" placeholder="nombre" value="<?php echo $variableC->get_nombre();?>">
						  </div>
						  <div class="form-group">
						    <label for="escudo">Escudo</label>
						    <input type="file" class="form-control" id="escudo" name="escudo" placeholder="escudo">
						  </div>
						  <div class="form-group">
						  	<label for="pais">pais</label>
						   	<?php echo $variableC->getDropDown('pais','idpais','idpais'); ?>
						  </div>
						  <div class="checkbox">
						    <label>
						      <input type="checkbox"> Check me out
						    </label>
						  </div>

						  <button type="submit" class="btn btn-default">Submit</button>
						</form>

						<div class="col-md-6">
							<?php $variableC->show_grid(); ?>
						</div>
										
			</div>
			
		</div>




<?php include ('../layouts/footer.php'); ?>
