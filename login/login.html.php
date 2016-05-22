<?php

    if( isset($_SESSION['user']) ){
        // Si tenemos configurado el usuario en el array de sesión
        // quiere decir que ya estamos logueado, por lo que no cargamos el formulario de login
        // y redirigimos a la página welcome

        header('Location: '.$base_url);
        exit();
    }else{

    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Iniciar sesion | Pinacotek</title>
  <link rel="stylesheet" type="text/css" href="../css/resert.css">
  <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
    <div class="container">


      <a id="registro" href=?redirect-join>Regístrate</a>

      <div class="titulo">
        <h1>Pinacotek</h1>
      </div>
      <div class="login">
        <form class="error" action="?login" method="post">
          <input type="email" name="email" value="" placeholder="Correo electronico" required="">
          <input type="password" name="pass" value="" placeholder="Contraseña" required="">
          <button type="submit" name="inicio">Iniciar sesión</button>
        </form>
      </div><!-- fin login -->
    </div><!-- fin container -->
</body>
</html>
