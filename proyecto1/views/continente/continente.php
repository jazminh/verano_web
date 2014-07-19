<?php 
  include ('../../libs/security.php');
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Continente.php');
  include ('../../controllers/ContinenteController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');

  if (isset($_POST['nombre'])){
    $continenteC=new ContinenteController();
    $continenteC->insertaContinente($_POST);

	}

?>
	<div class="row">
      <div class="col-md-6" aling="center">
      	<h3>Formulario Continente</h3>
        <form role="form" action="" method="POST">
        <div class="form-group">   
        	
		        <div class="form-group">
		          <label for="nombre">Continente: </label>
		          <input type="text" class="form-control"  name="nombre" id="nombre" placeholder="Ej. Europa" >
		        </div>
		        

		        
		        <button type="submit" class="btn btn-default">Guardar</button>
		    
     	</div>
      </form>
     </div>
    </div>


<?php include ('../layouts/footer.php'); ?>