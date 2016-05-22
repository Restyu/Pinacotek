<?php

function cuadros(){

  global $pdo;

  try {
      $sql = 'SELECT cuadros.nombre , pintores.nombre as pintor , cuadros.estilo , cuadros.soporte , cuadros.foto  FROM cuadros JOIN pintores on cuadros.id_pintor = pintores.id';
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
