<?php

require_once 'templates/header.html.php';

// Si accedemos a la página welcome: http://localhost:8080/pinacotek/admin/pintor
// sin habernos logueado, nos redirigirá a la página de error
if( isset($_SESSION['user']) == 'admin' ){

    $user = $_SESSION['user'];
    if ($user == 'admin') {

    }else{
      header('Location: '.$base_url);
    }

}else{
header('Location: '.$base_url);
    $user = $_SESSION['user'];
    echo $user;
    exit();
}

 ?>

<div class="row">
  <div class="col-lg-12">
    <div class="col-lg-5">
    <h2>Nuevo pintor</h2>
     <form class="form-group" action="?nuevopintor" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>Nombre</label>
            <input type="text" class="form-control" name="nombre">
          </div>
          <div class="form-group">
            <label>Apellido</label>
            <input type="text" class="form-control" name="apellido">
          </div>
          <div class="form-group">
            <label>F.nacimineto</label>
            <input type="text" class="form-control" name="nacimiento">
          </div>
          <div class="form-group">
            <label>muerte</label>
            <input type="text" class="form-control" name="muerte">
          </div>
          <div class="form-group">
            <label>Pais</label>
            <input type="text" class="form-control" name="pais">
          </div>
          <div class="form-group">
            <label>Ciudad</label>
            <input type="text" class="form-control" name="ciudad">
          </div>
          <div class="form-group">
            <label>Descripcion</label>
            <textarea class="form-control" rows="4" cols="40" name="descripcion"></textarea>
          </div>
          <div class="form-group">
            <label for="imagen">imagen</label>
            <input type="file" name="imagen" id="imagen" value="">
          </div>
          <button type="submit" class="btn btn-primary">Añadir</button>
        </form>
      </div><!--FIN DIV COL-LG-5 -->
      </div><!--FIN DIV COL-LG-12 -->
    </div><!--fin div row -->
</body>
</html>
