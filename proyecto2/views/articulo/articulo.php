<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Articulo.php');
  include ('../../controllers/ArticuloController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');

  if (isset($_POST['nombre'])){
  	
  	$articuloC=new ArticuloController();
  	$articuloC->insertaArticulo($_POST,$_FILES);

	}

?>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
          <form class="form-horizontal registerForm" role="form" action="" method="POST" enctype="multipart/form-data">
            <br>
                <h3>Articulo</h3>
            <br>
                  <div class="form-group">
                      <label class="col-lg-3 control-label">Nombre articulo </label>
                      <div class="col-lg-6">
                          <input type="text" class="form-control username" name="nombre" id="nombre" />
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-lg-3 control-label">Resumen </label>
                      <div class="col-lg-6">
                          <textarea type="text" class="form-control" name="resumen" id="resumen" ></textarea>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-lg-3 control-label">Abstract </label>
                      <div class="col-lg-6">
                          <textarea type="text" class="form-control" name="abstract" id="abstract" ></textarea>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-lg-3 control-label">Introduccion </label>
                      <div class="col-lg-6">
                          <textarea type="text" class="form-control" name="introduccion" id="introduccion" ></textarea>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-lg-3 control-label">Metodologia </label>
                      <div class="col-lg-6">
                          <textarea type="text" class="form-control" name="metodologia" id="metodologia" ></textarea>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-lg-3 control-label">Contenido </label>
                      <div class="col-lg-6">
                          <textarea type="text" class="form-control" name="contenido" id="contenido" ></textarea>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-lg-3 control-label">Fecha creacion  </label>
                      <div class="col-lg-6">
                      <div class='input-group date' id='datetimepicker1'>
                          <input type='text' class="form-control" id="fecha_creacion" name="fecha_creacion"/>
                          <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
                          </span>
                      </div>
                      </span>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-lg-3 control-label">Archivo (pdf)  </label>
                      <div class="col-lg-6">
                      <input type="file" class="form-control" id="archivo_pdf" name="archivo_pdf">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-3 control-label">ID. Status  : </label>
                    <select class="col-lg-3" id="id_status" name="id_status">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>

                      
                    </select>
                  </div>
                  <div class="form-group">
                      <label class="col-lg-3 control-label">Conclusiones </label>
                      <div class="col-lg-6">
                          <textarea type="text" class="form-control" name="conclusiones" id="conclusiones" ></textarea>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-lg-3 control-label">Agradecimientos </label>
                      <div class="col-lg-6">
                          <input type="text" class="form-control" name="agradecimientos" id="agradecimientos" />
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-lg-3 control-label">Referencias  </label>
                      <div class="col-lg-6">
                          <input type="text" class="form-control" name="referencias" id="referencias" />
                      </div>
                  </div>
                  <button type="submit" class="btn btn-default">Guardar</button>
                  <br><br>
              </form>
              <br><br>
      </div>
      
    </div>




<?php include ('../layouts/footer.php'); ?>