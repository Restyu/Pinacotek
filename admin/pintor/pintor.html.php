<?php

require_once 'templates/header.html.php';

 ?>

    <div class="row">
        <div class="col-lg-12">
          <div class="col-lg-5">
            <h2>Nuevo pintor</h2>
            <div class="form-group <?=$error_email?>">
              <label>Nombre</label>
                <input type="text" class="form-control" name="nombre">
              <label>Apellido</label>
                <input type="text" class="form-control" name="apellido">
              <label>F.nacimineto</label>
                <input type="text" class="form-control" name="nacimineto">
              <label>Pais</label>
                <input type="text" class="form-control" name="pais">
              <label>Ciudad</label>
                <input type="text" class="form-control" name="ciudad">
              <label>Descripcion</label>
                <textarea name="name" class="form-control" rows="4" cols="40" name="descripcion"></textarea>
              <label>Foto pintor</label>
                <input type="file" class="form-control btn-file" name="foto">
              <button type="submit" class="btn btn-primary">Añadir</button>
              </div>
            </div>

            <div class="col-lg-7">
              <h2>Registro de pintores</h2>
              <div class="lista table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>apellido</th>
                            <th>F.nacimineto</th>
                            <th>pais</th>
                            <th>ciudad</th>

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
