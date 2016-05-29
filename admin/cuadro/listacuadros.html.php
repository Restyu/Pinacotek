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

            <div class="col-lg-12">
              <h2>Lista de Cuadros</h2>
              <div class="lista table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>pintor</th>
                            <th>dimensiones</th>
                            <th>soporte</th>
                            <th>siglo</th>
                            <th>borrar</th>

                        </tr>
                    </thead>
                    <tbody>

                    <?php foreach($cuadros as $cu): ?>
                            <td><?=$cu['nombre']?></td>
                            <td><?=$cu['pintor']?></td>
                            <td><?=$cu['dimensiones']?></td>
                            <td><?=$cu['soporte']?></td>
                            <td><?=$cu['siglo']?></td>
                            <td class="listicon">
                              <button type="button" class="btn btn-primary btn-link btn-sm listiconbutton" data-toggle="modal" data-target="#myModal">
                                <i class="glyphicon glyphicon-trash"></i>
                              </button>
                              <!-- Vntana de dialogo  -->
                              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title" id="myModalLabel">Eliminar cuadro</h4>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                      <form action="?borrar" class="formulario" method="post">
                                        <input type="hidden" name="id_cuadro" value="<?=$cu['id']?>">
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div><!-- fin modal fade  -->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                  </table>
            </div>
          </div>
        </div>
    </div>
  </div>
</body>
</html>
