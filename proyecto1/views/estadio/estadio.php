<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Estadio.php');
  include ('../../controllers/EstadioController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');

  if (isset($_POST['nombre'])){
  	echo "<pre>";
 	 print_r($_POST);
  	echo"</pre>";

	}

?>

  <div class="row">
    <br><br>
    <div class="row">
      <div class="col-md-6" aling="center"> 
        <h2>Formulario Estadio</h2>
        <form role="form" action="" method="POST">
          <div class="form-group">
            <label for="Nombre">Nombre del estadio: </label>
            <input type="text" class="form-control"  name="Nombre" id="Nombre" placeholder="Ej. Mineirao" >
            <label for="idciudad">Ciudad: </label>
            <input type="text" class="form-control"  name="idciudad" id="idciudad" placeholder="Ej. Mineirao" >
            
          </div>
          
          <br>
          <button type="submit" class="btn btn-default">Guardar</button>
        </form> 
      </div>
   </div>
  </div>

<?php include ('../layouts/footer.php'); ?>