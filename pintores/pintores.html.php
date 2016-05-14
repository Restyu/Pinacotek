<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Pinacotek | Admin</title>
  <link rel="stylesheet" type="text/css" href="css/resert.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://localhost:8080/pinacotek/css/header.css">
  <link rel="stylesheet" type="text/css" href="http://localhost:8080/pinacotek/css/pintores.css">

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
            <a class="navbar-brand" href="http://localhost:8080/pinacotek">Pinacotek</a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right col-lg-7">
              <li class="active"><a href="http://localhost:8080/pinacotek/admin">Pintores <span class="sr-only">(current)</span></a></li>
              <li><a href="http://localhost:8080/pinacotek/admin/cuadro">Cuadros</a></li>
              <li><a href="http://localhost:8080/pinacotek/admin/favoritos">Colección</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Museos <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Lista museos</a></li>
                  <li><a href="#">Nuevo Museo</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Localizaciones</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Mapa</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Javi <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Configuracion</a></li>
                  <li><a href="#">Ajustes</a></li>
                  <li><a href="#">Acerca</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Cerrar session</a></li>
                </ul>
              </li>
              <div class="input-group busqueda col-lg-4">
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
     <div class="col-lg-offset-1 col-lg-10 resultados-widgets">
       <div class="col-lg-3">
         <h4>23 Pintores</h4>
       </div>
       <div class="col-lg-7">
          <h4>orden</h4>
          <form class="?ordenar" action="index.html" method="post">

          </form>
       </div>
     </div>
   </div>

   <div class="row">
     <div class="col-lg-offset-1 col-lg-10">
  <?php foreach($pintores as $pi): ?>
       <div class="col-sm-5 col-md-3 galeria">
         <div class="thumbnail">
           <img src="<?=$pi['foto']?>" alt="...">
           <div class="caption">
             <h3><?=$pi['nombre']?></h3>
           </div>
         </div>
       </div>
 <?php endforeach; ?>
     </div>
   </div>

 </div><!-- fin container -->
</body>
</html>