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
