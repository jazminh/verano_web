<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Pais.php');
  include ('../../controllers/PaisController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');

  if (isset($_POST['nombre'])){
    
    $paisC=new PaisController();
    $paisC->insertaPais($_POST,$_FILES);

  }

?>
    <div class="row">
      <h3>Formulario Pais</h3>
      <div class="col-md-6" aling="center"> 
        <form role="form" action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="idcontinente">Continente: </label>
          <select class="form-control " id="idcontinente" name="idcontinente">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                
          </select>
        </div>
        <div class="form-group">
          <label for="nombre">Pa&iacute;s: </label>
          <input type="text" class="form-control"  name="nombre" id="nombre" placeholder="Ej. M&eacute;xico" >
        </div>
        
        <div class="form-group">
          <label for="bandera">Bandera del Pa&iacute;s</label>
          <input type="file" id="bandera" name="bandera">
          
        </div>

        
        <button type="submit" class="form-control">Guardar</button>
      </form>


     </div>
    </div>

<?php include ('../layouts/footer.php'); ?>