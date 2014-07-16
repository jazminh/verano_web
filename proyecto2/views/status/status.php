<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Status.php');
  include ('../../controllers/StatusController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');

  if (isset($_POST['status'])){
  	
  	$statusC=new StatusController();
  	$statusC->insertaStatus($_POST);

	}

?>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
          <form class="form-horizontal registerForm" role="form" action="" method="POST">
            <br>
                <h3>Status</h3>
            <br>
            <div class="form-group">
                  <label class="col-lg-3 control-label">Status </label>
                  <div class="col-lg-6">
                      <input type="text" class="form-control username" name="status" id="status" />
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