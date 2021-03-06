<?php

    if( isset($_SESSION['user']) ){
          $user = $_SESSION['user'];
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
  <link rel="stylesheet" type="text/css" href="<?=$admin_url?>css/favoritos.css">
  <link rel="stylesheet" type="text/css" href="<?=$admin_url?>css/footer.css">
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
              <li><a href="<?=$admin_url?>/cuadros">Cuadros</a></li>
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
              <!-- <div class="input-group busqueda col-lg-3">
                <input type="text" class="form-control" placeholder="pintores , cuadros ...">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                </span>
              </div><!-- /input-group --> 
            </ul><!-- nav navbar-nav navbar-right col-lg-7 -->
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </div><!-- fin row -->

   <div class="row">
     <div class="col-lg-offset-1 col-lg-10">
       <?php foreach($favoritos as $fa): ?>
       <div class="col-sm-5 col-md-4 galeria">
         <div class="thumbnail">
           <img src="<?=$fa['foto']?>" alt="...">
           <div class="caption">
             <h3><?=$fa['nombrecuadro']?></h3>
             <h4><?=$fa['estilo']?> sobre <?=$fa['soporte']?></h4>
             <h5><?=$fa['nombrepintor']?></h5>
           </div>
         </div>
       </div>
      <?php endforeach; ?>
     </div>
   </div>
 </div><!-- fin container -->
</body>
</html>
