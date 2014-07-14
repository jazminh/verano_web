<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Jugador.php');
  include ('../../controllers/JugadorController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');

  if (isset($_POST['nombre'])){
  	echo "<pre>";
 	 print_r($_POST);
  	echo"</pre>";

	}

?>

<div id="Jugador" >
          <form role="form" action="" method="POST">
          <h2 align="center">Jugador</h2>
          
            <div class="form-group col-md-4 col-md-offset-4" >
              <label for="edad">N&uacute;mero: </label>
              <input type="text" class="form-control"  name="edad" id="edad" placeholder="Ej. 20" >
              <label for="pos">Posici&oacute;n: </label>
              <select class="form-control" id="pos" name="pos" required>
                        <option>posici&oacute;n</option>
                        <option value="1">Delantero</option>
                        <option value="2">Portero</option>
                        <option value="3">Defensa</option>
                        <option value="4">Medio</option>
                        
              </select>
            </div>
          </form>
</div>


<?php include ('../layouts/footer.php'); ?>
