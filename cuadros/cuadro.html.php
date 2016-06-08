<?php

    if( isset($_SESSION['user']) ){
          $user = $_SESSION['user'];
          $id_user = $_SESSION['id'];
    }else{

    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Pinacotek | Admin</title>
  <!-- <link rel="stylesheet" type="text/css" href="css/resert.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">
  <!-- Link alternativo al de arriba por si no carga  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?=$admin_url?>css/header.css">
  <link rel="stylesheet" type="text/css" href="<?=$admin_url?>css/cuadro.css">
  <link href='https://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="container">
    <div class="row">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?=$admin_url?>">Pinacotek</a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right col-lg-7">
              <li class="active"><a href="<?=$admin_url?>">Pintores <span class="sr-only">(current)</span></a></li>
              <li><a href="<?=$admin_url?>cuadros">Cuadros</a></li>
              <?php  if( isset($_SESSION['user']) ) : ?>
                <li><a href="<?=$admin_url?>favoritos">Colección</a></li>
              <?php endif; ?>
              <?php  if( isset($_SESSION['user']) ) : ?>
                <li class="dropdown">
                  <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=$user?><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?=$admin_url?>usuario">Configuracion</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="?logout">Cerrar Session</a></li>
                  </ul>
                </li>
              <?php endif; ?>
              <?php  if( !isset($_SESSION['user']) ) : ?>
                  <li><a href="<?=$admin_url?>login">Login</a></li>
              <?php endif; ?>
              <div class="input-group busqueda col-lg-3">
                <input type="text" class="form-control" placeholder="pintores , cuadros ...">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                </span>
              </div><!-- /input-group -->
            </ul><!-- nav navbar-nav navbar-right col-lg-7 -->
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav><!-- / navbar navbar-default -->
    </div><!-- fin row -->

    <div class="row">
      <div class="col-lg-offset-1 col-lg-10 ficha">
          <h3 class="obras">FICHA TECNICA</h3>
      </div>
    </div><!-- fin row -->

    <div class="row col-lg-offset-1 col-lg-10 vista">
      <div class="col-xs-6 col-md-7 cuadro">
        <a href="#" class="thumbnail">
          <img src="<?=$cuadro['foto']?>" alt="...">
        </a>
      </div>

      <div class="col-lg-5">
            <h1>Pintor</h1>
            <h2><?=$cuadro['nombre']?></h2>
            <h1>Titulo</h1>
            <h2><?=$cuadro['nombre']?></h2>
            <h1>Fecha</h1>
            <h2><?=$cuadro['year']?></h2>
            <h1>Tecnica</h1>
            <h2><?=$cuadro['estilo']?></h2>
            <h1>Soporte</h1>
            <h2><?=$cuadro['soporte']?></h2>
            <h1>Tema</h1>
            <h2><?=$cuadro['tema']?></h2>
            <h1>Dimensiones</h1>
            <h2><?=$cuadro['dimensiones']?></h2>
      </div><!-- col-lg-5 -->
    </div><!-- row col-lg-offset-1 col-lg-10 vista -->
    <?php  if( isset($_SESSION['user']) ) : ?>
      <form class=favorito action="?favorito" method="post">
        <input type="hidden" name="id_cuadro" value="<?=$cuadro['id']?>">
        <input type="hidden" name="id_usuario" value="<?=$id_user?>">
        <button type="submit" class="btn btn-link ">
          <i class="glyphicon glyphicon-heart"></i>
        </button>
      </form>
    <?php endif; ?>

 </div><!-- fin container -->
</body>
</html>
