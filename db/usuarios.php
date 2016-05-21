<?php

/**
 * se obtienen los usuarios de la base de datos.
 *
 * @return array
 */

function usuarios(){

  global $pdo;

  try {

      $sql = 'SELECT * FROM usuarios';
      $ps = $pdo->prepare($sql);
      $ps->execute();

  }catch (Exception $e) {

      die("No se han podido cargar los usuarios de la base de datos:". $e->getMessage());
  }

  while( $row = $ps->fetch(PDO::FETCH_ASSOC) ){
    $usuarios[] = $row;
  }

return $usuarios;
}


/**
 * Devuelve el usuario con el id que se le pasa
 *
 * @param $id id del usuario
 * @return  Array con la información del usuario.
 */

function login($email , $pass){

  global $pdo;

  try {

      $sql = 'SELECT * FROM usuarios WHERE email = :email and pass = :pass';
      $ps = $pdo->prepare($sql);
      $ps->bindValue(':email', $email);
      $ps->bindValue(':pass', $pass);
      $ps->execute();

  } catch (Exception $e) {

      die("No se han podido cargar los usuarios de la base de datos:". $e->getMessage());
  }

  $usuario = $ps->fetch(PDO::FETCH_ASSOC);

  return $usuario;
}
