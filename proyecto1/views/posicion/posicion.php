<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Posicion.php');
  include ('../../controllers/PosicionController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');

  if (isset($_POST['nombre'])){
  	echo "<pre>";
 	 print_r($_POST);
  	echo"</pre>";

	}

?>
    <div class="row">
      <div class="col-md-6" aling="center"> 
        <h3>Formulario Posicion</h3>
        <form role="form" action="" method="POST">
        <div class="form-group">
          
        
          <div class="form-group">
            <label for="nombre">Posici&oacute;n: </label>
            <input type="text" class="form-control"  name="nombre" id="nombre" placeholder="Ej. Delantero" >

            <br>

            <label for="abreviatura">Posici&oacute;n abreviada: </label>
            <input type="text" class="form-control"  name="abreviatura" id="abreviatura" placeholder="Ej. DEL" >
          </div>
        

        
          <button type="submit" class="btn btn-default">Guardar</button>
        


        </div>
        </form>
     </div>
    </div>

<?php include ('../layouts/footer.php'); ?>