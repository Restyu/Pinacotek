<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Pinacotek | Admin</title>
  <link rel="stylesheet" type="text/css" href="css/resert.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?=$admin_url?>admin/css/admin.css">
  <link rel="stylesheet" type="text/css" href="<?=$admin_url?>admin/css/usuarios.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <nav class="nav navbar navbar-default">
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
            <ul class="nav navbar-nav">
              <li class="active"><a href="<?=$admin_url?>admin">Pintores <span class="sr-only">(current)</span></a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cuadros <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <form action="<?=$admin_url?>admin/cuadro/" method="post">
                    <input type="hidden" name="lista" value="8">
                    <button class="listacuadros" type="submit" name="button">Lista cuadros</button>
                  </form>
                  <li role="separator" class="divider"></li>
                  <li><a href="<?=$admin_url?>admin/cuadro">Añadir cuadro</a></li>
                </ul>
              </li>
              <li><a href="<?=$admin_url?>admin/usuarios">Usuarios</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?=$admin_url?>/usuario">Configuracion</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="<?=$admin_url?>/cuadros?logout">Cerrar session</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </div><!-- FIN NAV -->
