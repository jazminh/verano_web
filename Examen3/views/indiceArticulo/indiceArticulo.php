<?php 
session_start();
  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/IndiceArticulo.php');
      include ('../../controllers/IndiceArticuloController.php');
      include ('../../libs/Er.php');
      include ('../layouts/header.php');
   $indiceArticuloC=new IndiceArticuloController();
  if (isset($_POST['id_indice'])){
    

    $indiceArticuloC->insertaIndiceArticulo($_POST);

  }
?>
	<br /><br />
	<!--meterlo a una funcion-->
      <?php 
      if ($indiceArticuloC->muestra_errores) {
    ?>    
       <div class="alert alert-danger">

          <?php //foreach => leer arreglos 
            foreach ($indiceArticuloC->errores as $value) {
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
      <div class="row" align="center">
             <div class="col-md-1"></div>
             <div class="col-md-4" align="center">
               <h2>Indice Articulo</h2>
                <form role="form" action="" method="POST" align="center" id="formIndiceArticulo">
                  <div class="form-group">
                    <label for="id_indice">Id indice</label>
                     <?php echo $indiceArticuloC->getDropDown1('indice', 'id_indice', 'id_indice'); ?>
                  </div>
                  <div class="form-group">
                    <label for="id_articulo">Id articulo</label>
                     <?php echo $indiceArticuloC->getDropDown2('articulo', 'id_articulo', 'id_articulo'); ?>
                  </div>
                  <div class="form-group">
                    <label for="numero">Numero</label>
                    <input type="text" class="form-control" id="numero" name="numero">
                  </div>
                  <button type="submit" class="btn btn-default">Guardar</button>
                </form>
             </div>
             <div class="col-md-4">
                  <h2>Lista de Tabla Indice-Articulo</h2>
                  <?php echo $indiceArticuloC->show_grid(); ?>
              </div>
        </div>
     </div>



      
<?php include ('../layouts/footer.php'); ?>