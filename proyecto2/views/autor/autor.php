<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Autor.php');
  include ('../../controllers/AutorController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');

  if (isset($_POST['nombre'])){
  	
  	$autorC=new AutorController();
  	$autorC->insertaAutor($_POST);

	}

?>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
          <form class="form-horizontal registerForm" role="form" action="" method="POST">
            <br>
                <h3 >Autor</h3>
            <br>
                  <div class="form-group">
                      <label class="col-lg-3 control-label">Nombre autor </label>
                      <div class="col-lg-6">
                          <input type="text" class="form-control username" name="nombre" id="nombre" />
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-lg-3 control-label">Apellidos </label>
                      <div class="col-lg-6">
                          <input type="text" class="form-control username" name="apellidos" id="apellidos" />
                      </div>
                  </div>
                  <div class="form-group">
                  <label class="col-lg-3 control-label">Email </label>
                      <div class="col-lg-6">
                          <input type="text" class="form-control" id="email" name="email" placeholder="Email@algo.com" />
                      </div>
                  </div>
                  <br>
                  <button type="submit" class="btn btn-default">Guardar</button>
                  <br>
                  <br>
          </form>
  </div>
</div>


<?php include ('../layouts/footer.php'); ?>