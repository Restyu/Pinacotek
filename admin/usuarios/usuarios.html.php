<?php

require_once '../templates/header.html.php';

 ?>

 <div class="row">
     <div class="col-lg-12">
       <div class="col-lg-5">
         <h2>Nuevo usuario</h2>
         <form class="form-group" action="" method="post">
             <label>Nombre</label>
               <input type="text" class="form-control" name="nombre">
             <label>email</label>
               <input type="email" class="form-control" name="nombre">
             <label>contraseña</label>
               <input type="text" class="form-control" name="apellido">
             <label>contraseña</label>
               <input type="text" class="form-control" name="nacimineto">
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
                  <tr>
                    <td>*****</td>
                    <td>*****</td>
                    <td>*****</td>
                    <td>*****</td>
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
