<?php

require_once 'app/info.php';
require_once 'db/connectdb.php';
require_once 'db/pintores.php';
require_once 'db/cuadros.php';

//session_start();

if( isset($_GET['logout']) ){

    // Se destruye la variable de sesión
    unset($_SESSION['user']);

    // Se destruye la sessión
    session_destroy();

    // Se redirige a la página login
    header("Location: ".$base_url.'/login');
}

if( isset($_GET['pintor']) ) {

  $id = htmlspecialchars($_POST['id'], ENT_QUOTES, 'UTF-8');

  $pintor = pintor($id);
  $numcuadro = numcuadros($id);
  $cuadros = cuadros();

  //var_dump($pintor);

  require_once 'pintor.html.php';
  exit();

}

$pintores = pintores();


require_once $base_path.'pintores/pintores.html.php';
