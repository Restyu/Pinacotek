<?php

require_once '../../app/info.php';
require_once '../../app/datadb.php';
require_once '../../db/connectdb.php';
require_once '../../db/usuarios.php';

session_start();

if( isset($_GET['nuevousuario']) ){

    $nombre = htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $pass1 = htmlspecialchars($_POST['pass1'], ENT_QUOTES, 'UTF-8');
    $pass2 = htmlspecialchars($_POST['pass2'], ENT_QUOTES, 'UTF-8');

    // echo $nombre;
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

    }else{

      $usuarios = usuarios();
      require_once 'usuarios.html.php';
      exit();
    }
    exit();
}


$usuarios = usuarios();
require_once 'usuarios.html.php';
