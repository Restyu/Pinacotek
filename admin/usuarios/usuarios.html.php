<?php

  if( !empty($errores['nombre']) ){
        $error_nombre = 'has-error';
  }else{
        $erro_nombre = '';
  }

  if( !empty($errores['email']) ){
      $error_email = 'has-error';
  }else{
      $erro_email = '';
  }

  if( !empty($errores['pass1']) ){
      $error_pass1 = 'has-error';
  }else{
      $erro_email = '';
  }

  if( !empty($errores['pass2']) ){
      $error_pass2 = 'has-error';
  }else{
      $erro_email = '';
  }

require_once '../templates/header.html.php';

 ?>

 <div class="row">
     <div class="col-lg-12">
       <div class="col-lg-5">
         <h2>Nuevo usuario</h2>
         <form class="form-group" action="?nuevousuario" method="post">
            <div class="form-group <?=$error_nombre?>">
              <label>Nombre</label>
              <input type="text" class="form-control" name="nombre" value="<?php echo (isset($nombre))?$nombre:''; ?>">
              <?php if( isset($errores['nombre']['longitud']) ): ?>
                <p class="help-block">El nombre debe al menos 4 caracteres.</p>
              <?php endif; ?>
            </div>
            <div class="form-group <?=$error_email?>">
               <label>email</label>
               <input type="email" class="form-control" name="email" value="<?php echo (isset($email))?$email:''; ?>">
               <?php if( isset($errores['email']['vacio']) ): ?>
                 <p class="help-block">El email no puede estar vacio.</p>
               <?php endif; ?>
            </div>
            <div class="form-group <?=$error_pass1?>">
                <label>contraseña</label>
                <input type="password" class="form-control" name="pass1">
                <?php if( isset($errores['pass1']['longitud']) ): ?>
                  <p class="help-block">La contraseña debe tener al  menos 5 caracteres.</p>
                <?php endif; ?>
            </div>
            <div class="form-group <?=$error_pass2?>">
                <label>contraseña</label>
                <input type="password" class="form-control" name="pass2">
                <?php if( isset($errores['pass2']['diferentes']) ): ?>
                  <p class="help-block">Las contraseñas no coinciden</p>
                <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary">Añadir</button>
         </form>
       </div>
        <div class="col-lg-7">
         <h2>Lista de usuarios</h2>
         <div class="lista table-responsive">
           <table class="table table-bordered table-hover table-striped">
               <thead>
                 <tr>
                   <th>Nombre</th>
                   <th>email</th>
                   <th>pass</th>
                   <th>borrar</th>
                 </tr>
               </thead>
                <tbody>
                  <?php foreach($usuarios as $us): ?>
                    <tr>
                      <td><?=$us['nombre']?></td>
                      <td><?=$us['email']?></td>
                      <td><?=$us['pass']?></td>
                      <td>borrar</td>
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