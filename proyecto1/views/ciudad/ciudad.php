<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Ciudad.php');
  include ('../../controllers/CiudadController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');

  if (isset($_POST['nombre'])){
    $ciudadC=new CiudadController();
    $ciudadC->insertaCiudad($_POST);

	}

?>
	<div class="row">
        <div class="col-md-6" aling="center"> 
          <h3>Formulario Ciudad</h3>
		    <div class="form-group">
		          
		      <form role="form" action="" method="POST">
		        <div class="form-group">
		          <label for="Nombre">Ciudad: </label>
		          <input type="text" class="form-control"  name="Nombre" id="Nombre" placeholder="Ej. Fortaleza" >
		        </div>
		        <button type="submit" class="btn btn-default">Guardar</button>
		      </form>
		    </div>
        </div>
    </div>

<?php include ('../layouts/footer.php'); ?>