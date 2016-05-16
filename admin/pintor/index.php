<?php

require_once '../app/info.php';
require_once '../app/datadb.php';
require_once '../db/connectdb.php';

//session_start();

$base_path = $_SERVER['DOCUMENT_ROOT'].'/pinacotek/admin/';
$base_imagen_path = $base_path . "imagenes/pintores/";


if( isset($_GET['nuevopintor']) ){

    $pais = htmlspecialchars($_POST['pais'], ENT_QUOTES, 'UTF-8');
    $nombre = htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8');
    $ciudad = htmlspecialchars($_POST['ciudad'], ENT_QUOTES, 'UTF-8');
    $muerte = htmlspecialchars($_POST['muerte'], ENT_QUOTES, 'UTF-8');
    $apellido = htmlspecialchars($_POST['apellido'], ENT_QUOTES, 'UTF-8');
    $nacimiento = htmlspecialchars($_POST['nacimiento'], ENT_QUOTES, 'UTF-8');
    $descripcion = htmlspecialchars($_POST['descripcion'], ENT_QUOTES, 'UTF-8');

    $file_name = $_FILES['imagen']['name'];
    $file_size = $_FILES['imagen']['size'];
    $file_tmp = $_FILES['imagen']['tmp_name'];
    $file_type = $_FILES['imagen']['type'];
    $file_error = $_FILES['imagen']['error'];


    try {
          $sql = "INSERT INTO pintores (ciudad , foto , nombre , pais , muerte , nacimiento , descripcion , apellido) VALUES (:ciudad , :foto , :nombre , :pais , :muerte , :nacimiento , :descripcion , :apellido)";

                  $foto = $base_url.'/admin/imagenes/pintores/'.$file_name;
                  $ps = $pdo->prepare($sql);
                  $ps->bindValue(':nombre', $nombre);
                  $ps->bindValue(':apellido', $apellido);
                  $ps->bindValue(':ciudad', $ciudad);
                  $ps->bindValue(':pais', $pais);
                  $ps->bindValue(':descripcion', $descripcion);
                  $ps->bindValue(':muerte', $muerte);
                  $ps->bindValue(':nacimiento', $nacimiento);
                  $ps->bindValue(':foto', $foto);
                  $ps->execute();

    } catch (Exception $e) {

      die ("no se ha podido enviar la imagen");
    }

    move_uploaded_file($file_tmp, $base_imagen_path . $file_name);

}else{

  require_once 'pintor.html.php';
}

require_once 'pintor.html.php';
