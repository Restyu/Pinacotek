<?php

require_once '../app/info.php';
require_once $base_path.'app/datadb.php';
require_once $base_path.'db/connectdb.php';
require_once $base_path.'db/usuarios.php';

session_start();

if( isset($_GET['join']) ) {

  $nombre = htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8');
  $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
  $pass1 = htmlspecialchars($_POST['pass1'], ENT_QUOTES, 'UTF-8');
  $pass2 = htmlspecialchars($_POST['pass2'], ENT_QUOTES, 'UTF-8');

  // echo $usuario;
  // echo $email;
  // echo $pass1;
  // echo $pass2;

  // Array de errores
  $errores = [];

  // El campo nombre no puede tener menos de 4 caracteres.
  if( strlen($nombre) < 4 ){
      $errores['nombre']['longitud'] = true;
  }

  // El campo email no puede estar vacio.
  if( $email == "" ){
      $errores['email']['vacio'] = true;
  }

  // La contraseña debe tener al menos 5 caracteres.
  if( strlen($pass1) < 5 ){
      $errores['pass1']['longitud'] = true;
  }

  // Las contraseñas deben ser iguales.
  if( $pass1 != $pass2 ){
      $errores['pass2']['diferentes'] = true;
  }

  if( empty($errores) ){

    // encriptacion del pass y pegado con el salt.
    $pass1 = md5($pass1.$salt);

    try {
          $sql = "INSERT INTO usuarios (nombre , email , pass ) VALUES (:nombre , :email , :pass)";
          $ps = $pdo->prepare($sql);
          $ps->bindValue(':nombre', $nombre);
          $ps->bindValue(':email', $email);
          $ps->bindValue(':pass', $pass1);
          $ps->execute();

    } catch (Exception $e) {
        die("No se ha podido guardar la tarea en la base de datos:". $e->getMessage());
    }
    header("Location: .");
    exit();

  }


}

// REDIRECIONA A LOGIN DESDE EL INDEX.PHP
if( isset($_GET['redirect-login']) ) {

  require_once $base_path.'login/login.html.php';

  exit();
}

// REDIRECIONA A JOIN DESDE EL INDEX.PHP
if( isset($_GET['redirect-join']) ) {

  require_once $base_path.'login/join.html.php';

  exit();
}


if( isset($_GET['login']) ) {

  $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
  $pass = htmlspecialchars($_POST['pass'], ENT_QUOTES, 'UTF-8');

  $pass = md5($pass.$salt);

  // echo $email;
  // echo $pass;

  $usuario = login($email , $pass);

  //var_dump($usuario);

  $id_usuario = $usuario['id'];


  if ($usuario == true) {

    $nombre = $usuario['nombre'];

    $_SESSION['user'] = $nombre;
    $_SESSION['id'] = $id_usuario;
    echo $_SESSION['id'];

    header('Location: '.$base_url);

  }else{

    header('Location: '.$base_url.'/login');
    exit();
  }

}

  require_once $base_path.'login/login.html.php';
