<?php

/**
 * se obtienen los usuarios de la base de datos.
 *
 * @return array
 */

function pintores(){

  global $pdo;

  try {
      $sql = 'SELECT * FROM pintores';
      $ps = $pdo->prepare($sql);
      $ps->execute();
  }catch (Exception $e) {
      die("No se han podido cargar los pintores de la base de datos:". $e->getMessage());
  }

  while( $row = $ps->fetch(PDO::FETCH_ASSOC) ){
    $pintores[] = $row;
  }

  return $pintores;
}


/**
 * Devuelve el pintor con el id que se le pasa
 *
 * @param $id id del pintor
 * @return  Array con la información del pintor.
 */

function pintor($id){

  global $pdo;

  try {

      $sql = 'SELECT * FROM pintores WHERE id = :id';
      $ps = $pdo->prepare($sql);
      $ps->bindValue(':id', $id);
      $ps->execute();

  } catch (Exception $e) {

      die("No se han podido cargar el pintor de la base de datos:". $e->getMessage());
  }

  $pintor = $ps->fetch(PDO::FETCH_ASSOC);

  return $pintor;
}

function numcuadros($id){

  global $pdo;

  try {

      $sql = 'SELECT count(cuadros.nombre) as numcuadro FROM pintores JOIN cuadros on pintores.id = cuadros.id_pintor where pintores.id = :id';
      $ps = $pdo->prepare($sql);
      $ps->bindValue(':id', $id);
      $ps->execute();

  } catch (Exception $e) {

      die("No se han podido cargar el pintor de la base de datos:". $e->getMessage());
  }

  $numcuadro = $ps->fetch(PDO::FETCH_ASSOC);

  return $numcuadro;
}
