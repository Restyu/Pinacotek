<?php

/**
 * Devuelve los cuadros favoritos del usuario
 * @param $id id del usuario.
 * @return  cuadros favoritos
 */

 function favoritos($id_usuario){

  global $pdo;

  try {
      $sql = 'SELECT cuadros.foto , cuadros.nombre as nombrecuadro , pintores.nombre as nombrepintor ,cuadros.soporte , cuadros.estilo FROM favoritos
      join cuadros
      on  favoritos.id_cuadro = cuadros.id
      join pintores
      on cuadros.id_pintor = pintores.id
      WHERE favoritos.id_usuario = :id';
      $ps = $pdo->prepare($sql);
      $ps->bindValue(':id', $id_usuario);
      $ps->execute();

  }catch (Exception $e) {

      die("No se han podido cargar los cuadros de la base de datos:". $e->getMessage());
  }

  while( $row = $ps->fetch(PDO::FETCH_ASSOC) ){
    $favoritos[] = $row;
  }

    return $favoritos;
 }
