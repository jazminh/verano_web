<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Integrante.php');
  include ('../../controllers/IntegranteController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');

  if (isset($_POST['nombre'])){
  	echo "<pre>";
 	 print_r($_POST);
  	echo"</pre>";

	}

?>
<div class="col-md-4 col-md-offset-4">
          <h2 align="center">Integrante</h2>
          <form role="form" action="" method="POST">
            <div class="form-group">
              <label for="nombre">Nombre: </label>
              <input type="text" class="form-control"  name="nombre" id="nombre" placeholder="Ej. Rafa" >
              <label for="apellido">Apellido: </label>

              <input type="text" class="form-control"  name="apellido" id="apellido" placeholder="Ej. Marquez" >

            </div>
            <div class="form-group">
              <label for="edad">Edad: </label>
              <input type="text" class="form-control"  name="edad" id="edad" placeholder="Ej. 20" >
              <label for="peso">Peso: </label>
              <input type="text" class="form-control"  name="peso" id="peso" placeholder="Ej. 70" >
              <label for="peso">Estatura: </label>
              <input type="text" class="form-control"  name="estatura" id="estatura" placeholder="Ej. 1.80" >
            </div>
            <div class="form-group">
              <label for="foto">Selecciona una foto:</label>
              <input type="file" id="foto" name="foto">
              
            </div>
          </form>


          <div class="form-group">
            <label for="idcontinente">Seleccione el tipo de Integrante: </label>
            <br>
            <a href="../integrante/jugador.php"><button  id="bJugador">Jugador</button></a>
            <a href="../integrante/entrenador.php"><button  id="bEntrenador">Entrenador</button></a>
            
              <br>
                
          </div>
</div>
          

          




<?php include ('../layouts/footer.php'); ?>