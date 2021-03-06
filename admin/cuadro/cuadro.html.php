<?php

require_once '../templates/header.html.php';

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
            <h2>Nuevo cuadro</h2>
            <form class="form-group" action="?nuevocuadro" method="post" enctype="multipart/form-data">

              <label>Nombre del cuadro</label>
                <input type="text" class="form-control" name="cuadro">
                <div class="form-group">
                  <label for="sel1">Nombre del pintor</label>
                  <select class="form-control" name="pintor" id="pintor">
                    <?php foreach($pintores as $pi): ?>
                      <option value="<?=$pi['id']?>"><?=$pi['nombre']?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              <label>dimensiones</label>
                <input type="text" class="form-control" name="dimensiones">
              <label>soporte</label>
                <input type="text" class="form-control" name="soporte">
              <label>tema</label>
                <input type="text" class="form-control" name="tema">
              <label>estilo</label>
                <input type="text" class="form-control" name="estilo">
              <label>año</label>
                <input type="text" class="form-control" name="year">
              <label>siglo</label>
                <input type="text" class="form-control" name="siglo">
              <label for="imagen">imagen</label>
                  <input type="file" name="imagen" id="imagen" value="">

              <button type="submit" class="btn btn-primary">Añadir</button>
              </form>
            </div>
        </div>
    </div>
  </div>
</body>
</html>
