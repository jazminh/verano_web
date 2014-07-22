<?php 
  define('BASEURL','http://localhost/verano_web/proyecto2');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Examen 3: Programacion Web</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrapValidator.min.css"/>
    <link rel="stylesheet" href="../css/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <link rel="stylesheet" href="../css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <link rel="stylesheet" href="../css/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="../css/mi.css" rel="stylesheet">


    
    
    



  </head>

  <body role="document" background="../im/fondo.png" style="background-attachment: fixed; background-repeat: no-repeat; background-position:top center;" >
    <header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="../site/inicio.php" class="navbar-brand"><img src="../im/bigotito.png" height="110%" weight="1010%">Mi revista</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <?php if( !isset($_SESSION['user']) ){?>
        <li>
          <a href="<?php echo BASEURL;?>/views/site/login.php">Login</a>
        </li>
        <?php }else{ ?>
        <li>
          <a href="<?php echo BASEURL;?>/views/site/logout.php">Logout</a>
        </li>
        <?php } ?>
        
        
        <li>
          <a href="<?php echo BASEURL;?>/views/articulo/articulo.php"><span class="glyphicon glyphicon-list-alt"></span> Articulo</a>
        </li>
        <li>
          <a href="<?php echo BASEURL;?>/views/autor/autor.php"><span class="glyphicon glyphicon-list-alt"></span> Autor</a>
        </li>
        <li>
          <a href="<?php echo BASEURL;?>/views/revista/revista.php"><span class="glyphicon glyphicon-list-alt"></span> Revista</a>
        </li>
        <li>
          <a href="<?php echo BASEURL;?>/views/status/status.php"><span class="glyphicon glyphicon-list-alt"></span> Status</a>
        </li>
      </ul>
    </nav>
  </div>
</header>

    <div class="container theme-showcase" role="main">

    <br>
    <br>
    <br>
    <br>

