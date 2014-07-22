<?php 
  session_start();
  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Indice.php');
      include ('../../controllers/IndiceController.php');
      include ('../../libs/Er.php');
  include ('../layouts/header.php');

   $indiceC = new IndiceController();
  if (isset($_POST['titulo']))
  {
   
    $indiceC->insertaIndice($_POST);
  }
?>

  <!--meterlo a una funcion-->
      <?php 
      if ($indiceC->muestra_errores) {
    ?>    
       <div class="alert alert-danger">

          <?php //foreach => leer arreglos 
            foreach ($indiceC->errores as $value) {
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
             <div class="col-md-1"></div>
             <div class="col-md-4" align="center">
                <h2>Registro Indice</h2>
                <form role="form" id="formIndice" method="POST"  ENCTYPE="multipart/form-data">
                  <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo">
                  </div>
                  <div class="form-group">
                    <label for="numero">Numero</label>
                    <input type="text" class="form-control" id="numero"  name="numero">
                  </div>
                  <div class="form-group">
                    <label for="id_revista">Id revista</label>
                     <?php echo $indiceC->getDropDown('revista', 'id_revista', 'id_revista'); ?>
                  </div>
                 <input type="submit" clase="btn btn-default" value="Guardar"/>
                </form>
             </div>
              <div class="col-md-1"></div>
               <div class="col-md-4">
                  <h2>Lista de Indices</h2>
                  <?php echo $indiceC->show_grid(); ?>
              </div>
        </div>
     </div>
      
<?php include ('../layouts/footer.php'); ?>