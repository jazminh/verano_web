<?php 
session_start();
  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Autor.php');
      include ('../../controllers/AutorController.php');
      include ('../../libs/Er.php');
       include ('../layouts/header.php');
       $autorC=new AutorController();
   if (isset($_POST['nombre'])){
    $autorC->insertaAutor($_POST);
  }
?>
	<br /><br />

<div style="display:none"><div id="data">


	<div class="container">
    	<div class="row">
            <div class="col-md-4"></div>
             <div class="col-md-4" align="center">
                <form role="form" id="formAutor" method="POST">
                  <h2>Registro Autor</h2>
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                  </div>
                  <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos"  name="apellidos">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email">
                  </div>
                
                   <input type="submit" clase="btn btn-default" value="Guardar"/>
                </form>
             </div>
             
        </div>
        

     </div>
     </div></div>

     <div class="row">
      <?php if( isset($_SESSION['user']) ){?>
      <a href="#data" id="inline" class="btn btn btn-info btn-lg active" role="button">
      <span class="glyphicon glyphicon-list-alt"></span>  Registro de Autores</a>
      <?php } ?>
     </div>

     


     <div class="row">
                  <h2>Lista Autor</h2>
                  <?php echo $autorC->show_grid(); ?>
            </div>
     



      
<?php include ('../layouts/footer.php'); ?>