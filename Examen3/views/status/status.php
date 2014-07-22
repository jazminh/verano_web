<?php 
 session_start();
  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Status.php');
      include ('../../controllers/StatusController.php');
      include ('../../libs/Er.php');
       include ('../layouts/header.php');
   $statusC= new StatusController();
  if (isset($_POST['status']))
  {
   
    $statusC->insertaStatus($_POST);
  }
?>
 






<div style="display:none">
  <div id="data">
    
    <div class="col-md-12" align="center">
    <form role="form" id="formStatus" method="POST">
      <h2>Registro Status</h2>
      <div class="form-group">
        <label for="status">Nombre Status</label>
        <input type="text" class="form-control" id="status" name="status" >
      </div>
      <input type="submit" clase="btn btn-default" value="Guardar"/>
      </form>
    </div>
    </div>
  </div>
  <!--meterlo a una funcion-->
      <?php 
      if ($statusC->muestra_errores) {
    ?>    
       <div class="alert alert-danger">

          <?php //foreach => leer arreglos 
            foreach ($statusC->errores as $value) {
                echo "<p>error: $value</p>";
             
            }


           ?>

       </div>
    <?php 
      }
      else{

        
      }
     ?>
	<br /><br />
	<div class="container">
    	<div class="row">
             
              <div class="col-md-2"></div>
              <div class="col-md-4">
                  <h2>Lista de Status</h2>
                  <?php echo $statusC->show_grid(); ?>
              </div>
               
        </div>
        <?php if( isset($_SESSION['user']) ){?> 
<a href="#data" id="inline" class="btn btn btn-info btn-lg active" role="button"> 
  <span class="glyphicon glyphicon-list-alt">
  </span> Registro de Status</a> <?php } ?> 

     </div>



      
<?php include ('../layouts/footer.php'); ?>