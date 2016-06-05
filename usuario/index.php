<?php

require_once '../app/info.php';
require_once '../db/connectdb.php';
require_once '../db/usuarios.php';

session_start();

$id = $_SESSION['id'];

$usuario = info($id);

$base_path = $_SERVER['DOCUMENT_ROOT'].'/pinacotek/admin/';

$base_imagen_path = $base_path . "imagenes/usuarios_avatar/";

if( isset($_GET['editar_perfil']) ){

  $pais = htmlspecialchars($_POST['pais'], ENT_QUOTES, 'UTF-8');

  $file_name = $_FILES['imagen']['name'];
  $file_size = $_FILES['imagen']['size'];
  $file_tmp = $_FILES['imagen']['tmp_name'];
  $file_type = $_FILES['imagen']['type'];
  $file_error = $_FILES['imagen']['error'];

  try {

      $foto = $admin_url.'admin/imagenes/usuarios_avatar/'.$file_name;
    	$sql = "UPDATE usuarios SET pais = :pais, avatar = :avatar WHERE id = :id";
      $ps = $pdo->prepare($sql);
      $ps->bindValue(':pais', $pais);
      $ps->bindValue(':id', $id);
      $ps->bindValue(':avatar', $foto);
      $ps->execute();

  } catch (Exception $e) {

    die("No se ha podido modificar el poerfil". $e->getMessage());
  }

  move_uploaded_file($file_tmp, $base_imagen_path . $file_name);
}

require_once 'usuario.html.php';
