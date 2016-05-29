<?php

/**
 * se obtienen los cuadros de la base de datos.
 *
 * @return array
 */

function cuadros(){

  global $pdo;

  try {
      $sql = 'SELECT cuadros.id , cuadros.nombre , pintores.nombre as pintor , cuadros.estilo , cuadros.soporte , cuadros.foto , cuadros.dimensiones , cuadros.year  , cuadros.siglo FROM cuadros JOIN pintores on cuadros.id_pintor = pintores.id';
      $ps = $pdo->prepare($sql);
      $ps->execute();
  }catch (Exception $e) {
      die("No se han podido cargar los cuadros de la base de datos:". $e->getMessage());
  }

  while( $row = $ps->fetch(PDO::FETCH_ASSOC) ){
    $cuadros[] = $row;
  }

return $cuadros;
}



/**
 * Devuelve los cuadros del id del pintor que se le pasa como parametros .
 * @param $id id del cuadro.
 * @return  informacion del cuadro.
 */

function cuadro($id){

  global $pdo;

  try {
      $sql = 'SELECT * FROM cuadros WHERE id = :id';
      $ps = $pdo->prepare($sql);
      $ps->bindValue(':id', $id);
      $ps->execute();

  }catch (Exception $e) {

      die("No se han podido cargar los cuadros de la base de datos:". $e->getMessage());
  }

  $cuadro = $ps->fetch(PDO::FETCH_ASSOC);

  return $cuadro;
}
