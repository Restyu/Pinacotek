<?php

require_once '../templates/header.html.php';

 ?>

    <div class="row">
        <div class="col-lg-12">
          <div class="col-lg-5">
            <h2>Nuevo cuadro</h2>
            <div class="form-group <?=$error_email?>">
              <label>Nombre del cuadro</label>
                <input type="text" class="form-control" name="cuadro">
              <label>Nombre del pintor</label>
                <input type="text" class="form-control" name="pintor">
              <label>dimensiones</label>
                <input type="text" class="form-control" name="dimensiones">
              <label>soporte</label>
                <input type="text" class="form-control" name="soporte">
              <label>tema</label>
                <input type="text" class="form-control" name="tema">
              <label>estilo</label>
                <input type="text" class="form-control" name="estilo">
              <label>año</label>
                <input type="text" class="form-control" name="año">
              <label>siglo</label>
                  <input type="text" class="form-control" name="siglo">
              <label>Foto</label>
                <input type="file" class="form-control btn-file" name="foto">
              <button type="submit" class="btn btn-primary">Añadir</button>
              </div>
            </div>

            <div class="col-lg-7">
              <h2>Registro de Cuadros</h2>
              <div class="lista table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>apellido</th>
                            <th>siglo</th>
                            <th>estilo</th>
                            <th>tema</th>

                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>*****</td>
                            <td>*****</td>
                            <td>*****</td>
                            <td>*****</td>
                            <th>*****</th>
                        </tr>
                    </tbody>
                  </table>
            </div>
          </div>
        </div>
    </div>
  </div>
</body>
</html>
