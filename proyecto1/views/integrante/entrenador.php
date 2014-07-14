<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Entrenador.php');
  include ('../../controllers/EntrenadorController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');

  if (isset($_POST['nombre'])){
  	echo "<pre>";
 	 print_r($_POST);
  	echo"</pre>";

	}

?>


<div id="Entrenador" >
	<div class="col-md-4 col-md-offset-4">
	<h3 align="center">Entrenador</h3>
          <form role="form" action="" method="POST">
          
          
          
            <select class="form-control" id="idpais" name="idpais" required>
                    <option>Pais de procedencia</option>
                    <option value="1">Brasil</option>
                    <option value="2">EEUU</option>
                    <option value="3">Francia</option>
                    <option value="4">Nigeria</option>
            </select>
          
          </form>
          </div>
          </div> 

<?php include ('../layouts/footer.php'); ?>
