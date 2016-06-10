<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro | Pinacotek</title>
  <link rel="stylesheet" type="text/css" href="../css/resert.css">
  <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
    <div class="container">

      <a id="registro" href=?redirect-login>Iniciar seción</a>

      <div class="titulo">
        <h1>Pinacotek</h1>
      </div>
      <div class="join">
        <form class="error" action="?join" method="post">
          <input type="email" name="email" value="" placeholder="Correo electronico" required="">
          <input type="text" name="nombre" value="" placeholder="Nombre de usuario" required="">
          <input type="password" name="pass1" value="" placeholder="Contraseña" required="">
          <input type="password" name="pass2" value="" placeholder="Confirmar contraseña" required="">
          <button type="submit" class="boton-registrarse" name="inicio">Registrate</button>
        </form>
      </div><!-- fin login -->
    </div><!-- fin container -->
</body>
</html>
