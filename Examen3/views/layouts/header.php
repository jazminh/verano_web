<?php 
  define('BASEURL','http://localhost/verano_web/Examen3');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    </script>
    <script type="text/javascript" src="../js/jquery.fancybox.pack.js"></script>
    <link href="../css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />    
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrapValidator.min.css" rel="stylesheet" />
    <!--<link  href="../css/style.css" rel="stylesheet" >-->
    <link href="../css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../css/estilos.css"/>
    <!--<script src="../js/jquery-1.10.2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  
          <!-- Required JS -->
    <script src="../js/moment.min.js"></script>
    <script src="../js/bootstrap-datetimepicker.min.js"></script>
   

    <!--<link href="../css/offcanvas.css" rel="stylesheet">-->
    <title>Examen 3</title>
  </head>

  <body role="document" class="fondo">

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="menu">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo BASEURL; ?>/views/site/inicio.php">Examen 3 Programación Web</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <?php if( isset($_SESSION['user']) ){?>
            <li class="active"><a href="<?php echo BASEURL; ?>/views/status/status.php">Status</a></li>
            
            <li class="active"><a href="<?php echo BASEURL; ?>/views/indice/indice.php">Indice</a></li>
            <li class="active"><a href="<?php echo BASEURL; ?>/views/indiceArticulo/indiceArticulo.php">Indice Articulo</a></li>
            <?php } ?>
            <li class="active"><a href="<?php echo BASEURL; ?>/views/revista/revista.php">Revista</a></li>
            <li class="active"><a href="<?php echo BASEURL; ?>/views/articulo/articulo.php">Articulo</a></li>
            <li class="active"><a href="<?php echo BASEURL; ?>/views/autor/autor.php">Autor</a></li>
         </ul>

          <ul class="nav navbar-nav navbar-right">
            
            <?php if( !isset($_SESSION['user']) ){?>
            <li><a href="<?php echo BASEURL; ?>/views/site/login.php">
              <span class="glyphicon glyphicon-log-in"></span> Login</a>
            </li>
            <?php }else{ ?>
            <li><a href="<?php echo BASEURL; ?>/views/site/logout.php">
              <span class="glyphicon glyphicon-log-out"></span> Logout</a>
            
            </li>
            <?php } ?>
          </ul>
          

        </div><!--/.nav-collapse -->
      </div>
    </div>
    <br><br><br>
    <div class="container theme-showcase" role="main">

