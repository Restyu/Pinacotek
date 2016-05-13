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
