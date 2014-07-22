<?php 
  include ('../../libs/security.php');
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Revista.php');
  include ('../../controllers/RevistaController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');

  $variableC=new RevistaController();
  if (isset($_POST['nombre'])){
  	
  	
  	$variableC->insertaRevista($_POST,$_FILES);

	}

?>

<div class="row">
  <div class="col-md-6 col-md-offset-3">
          <form class="form-horizontal registerForm" role="form" action="" method="POST" enctype="multipart/form-data">
            <?php
 include ('../../libs/funcion.php');
 ?>
            <br>
                <h3 >Revista</h3>
            <br>
                                      <div class="form-group">
                                            <label class="col-lg-3 control-label">Nombre revista </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control username"  name="nombre" id="nombre" value="
                          <?php echo $variableC->get_nombre(); ?>"/>
                                            </div>
                                      </div>
                                      <div class="form-group">
                                            <label class="col-lg-3 control-label">Portada </label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="portada" name="portada"  />
                                            </div>
                                      </div>
                                      <div class="form-group">
                                            <label class="col-lg-3 control-label">Fecha  </label>
                                            <div class="col-lg-6">
                                            
                                              <div class='input-group date' id='datetimepicker1'>
                                                  <input type='text' class="form-control" name="fecha" id="fecha" value="
                          <?php echo $variableC->get_fecha(); ?>"/>
                                                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                                  </span>
                                              </div>
                                            </div>
                                            
                                      </div>
                                      <div class="form-group">
                                            <label class="col-lg-3 control-label">Volumen </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control username" name="volumen" id="volumen" value="
                          <?php echo $variableC->get_volumen(); ?>"/>
                                            </div>
                                      </div>
                                      <div class="form-group">
                                            <label class="col-lg-3 control-label">Titulo </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control username" name="titulo" id="titulo" value="
                          <?php echo $variableC->get_titulo(); ?>"/>
                                            </div>

                                      </div>
                                      <div class="form-group">
                                            <label class="col-lg-3 control-label">Subtitulo </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control username" name="subtitulo" id="subtitulo" 
                                                value="
                          <?php echo $variableC->get_subtitulo(); ?>"/>
                                            </div>
                                            
                                      </div>
                                      <div class="form-group">
                                            <label class="col-lg-3 control-label">Numero </label>
                                            <div class="col-lg-3">
                                                <input type="text" class="form-control" name="numero" id="numero" value="
                          <?php echo $variableC->get_numero(); ?>"/>
                                            </div>
                                            
                                      </div>
                                      <div class="form-group">
                                            <label class="col-lg-3 control-label">Clave </label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control username" name="clave" id="clave" value="
                          <?php echo $variableC->get_clave(); ?>"/>
                                            </div>
                                            
                                      </div>
                                      <div class="form-group">
                                            <label class="col-lg-3 control-label">Directorio </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" name="directorio" id="directorio" ></textarea>
                                            </div>
                                            
                                      </div>
                                      <div class="form-group">
                                            <label class="col-lg-3 control-label">Editorial </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" name="editorial" id="editorial" ></textarea>
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
                                      <br>
                                      <button type="submit" class="btn btn-default">Guardar</button>
                                      <br>
                                      <br>
          </form>
  </div>
</div>


<?php include ('../layouts/footer.php'); ?>