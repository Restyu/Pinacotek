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
  <title>Pinacotek | Configuracion</title>
  <link rel="stylesheet" type="text/css" href="css/resert.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">
  <!-- Link alternativo al de arriba por si no carga  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?=$admin_url?>css/header.css">
  <link rel="stylesheet" type="text/css" href="<?=$admin_url?>css/usuario.css">
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
                  <li><a href="#">Configuracion</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="?logout">Cerrar Session</a></li>
                </ul>
              </li>
              <?php endif; ?>
              <?php  if( !isset($_SESSION['user']) ) : ?>
                  <li><a href="<?=$admin_url?>login">Login</a></li>
              <?php endif; ?>
              <!-- <div class="input-group busqueda col-lg-3">
                <input type="text" class="form-control busqueda" placeholder="pintores , cuadros ...">
                <span class="input-group-btn">
                  <button class="btn btn-default busqueda-boton" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                </span>
              </div><!-- /input-group --> 
            </ul><!-- nav navbar-nav navbar-right col-lg-7 -->
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </div><!-- fin row -->

    <div class="row">
      <div class="col-lg-offset-2 col-lg-8">
      <h1>Editar Perfil</h1>
      <form action="?editar_perfil" method="POST" enctype="multipart/form-data">
        <div class="col-lg-4">
            <img src="<?=$usuario['avatar']?>" class="img-circle">
            <div>
              <label for="imagen"> <span class="avatar">Canbiar imagen</span></label>
              <input style="visibility: hidden; position: absolute;" id="imagen" class="form-control" type="file" name="imagen">
            </div>
        </div><!-- fin col-lg-4 -->
        <div class="col-lg-8 info">
          <input type="text" class="form-control" name="nombre" disabled value="<?=$usuario['nombre']?>">
          <input type="text" class="form-control" name="email"  disabled value="<?=$usuario['email']?>">
          <input type="text" class="form-control" name="pais" value="" placeholder="Pais">
        </div>
      </div><!-- fin col-fg-12 -->
      <div class="col-lg-offset-2 col-lg-1">
        <button class="btn btn-info guardar" type="submit" name="guadar">Guardar</button>
      </div>
    </form><!-- fin form -->
    <div class="col-lg-2">
      <button class="btn btn-info eliminar" type="submit" name="Eliminar">Eliminar cuenta</button>
    </div>
    </div><!-- fin row -->
    <div class="row">
      <div class="col-lg-offset-2 col-lg-8">
          <h3>Cambiar contraseña</h3>
      </div>
      <div class="col-lg-offset-2 col-lg-8 pass">
        <input type="text" class="form-control" disabled name="pass" value="" placeholder="Contraseña">
        <input type="text" class="form-control" disabled name="nuevo_pass" value="" placeholder="Nueva contraseña">
        <input type="text" class="form-control" disabled name="confi_pass" value="" placeholder="Repetir nueva contraseña">
        <button type="submit" class="btn btn-info guardar_pass" name="cambio_pass">Guardar</button>
      </div>
    </div>
 </div><!-- fin container -->
</body>
</html>

<!--
    Proyecto Pinacotek.
    Realizado por javi.
    github: https://github.com/Restyu/Pinacotek
 -->
