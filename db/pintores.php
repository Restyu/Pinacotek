<?php

/**
 * se obtienen los pintores de la base de datos.
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


/**
 * Calcula el numero de cuadros del id del pintor que se le pasa como parametro.
 *
 * @param $id id del pintor
 * @return  Numero de cuadros.
 */

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


/**
 * Devuelve los cuadros del id del pintor que se le pasa como parametros .
 * @param $id id del pintor.
 * @return  Cuadros del pintor.
 */

function cuadrospintor($id){

  global $pdo;

  try {

      $sql = 'SELECT cuadros.id , cuadros.nombre as nombre , pintores.nombre as pintor , cuadros.estilo as estilo , cuadros.soporte as soporte , cuadros.foto as foto FROM pintores JOIN cuadros on pintores.id = cuadros.id_pintor where pintores.id = :id';
      $ps = $pdo->prepare($sql);
      $ps->bindValue(':id', $id);
      $ps->execute();

  } catch (Exception $e) {

      die("No se han podido cargar el pintor de la base de datos:". $e->getMessage());
  }

  while( $row = $ps->fetch(PDO::FETCH_ASSOC) ){
    $cuadrospintor[] = $row;
  }

  return $cuadrospintor;

}
