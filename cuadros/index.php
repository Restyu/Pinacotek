<?php

require_once '../app/info.php';
require_once '../db/connectdb.php';
require_once '../db/cuadros.php';

session_start();

// Se añade cuadro a favorito
if( isset($_GET['favorito']) ){

	$id_cuadro = htmlspecialchars($_POST['id_cuadro'], ENT_QUOTES, 'UTF-8');
	$id_usuario = htmlspecialchars($_POST['id_usuario'], ENT_QUOTES, 'UTF-8');

	// var_dump($_POST);

	try {

		$sql = "INSERT INTO favoritos (id_cuadro , id_usuario) VALUES (:id_cuadro , :id_usuario)";
		$ps = $pdo->prepare($sql);
		$ps->bindValue(':id_cuadro', $id_cuadro);
		$ps->bindValue(':id_usuario', $id_usuario);
		$ps->execute();


	} catch (Exception $e) {

		  die ("no se ha podido añadir el cuadro a tus favoritos");

	}

	$cuadro = cuadro($id_cuadro);
	require_once 'cuadro.html.php';
	exit();
}

// Recibe el parametro enviado de pintor.php.html
if ( isset($_POST['infocuadro']) ) {

	$id_cuadro = $_POST['infocuadro'];

  //var_dump($_POST);

  $cuadro = cuadro($id_cuadro);

  require_once 'cuadro.html.php';
  exit();

}


if ( isset($_GET['vista_tecnica']) ) {

		$id_cuadro = $_POST['id_cuadro'];

		$cuadro = cuadro($id_cuadro);

	  require_once 'cuadro.html.php';
		exit();

}

// Se cierra la sesion
if( isset($_GET['logout']) ){

    // Se destruye la variable de sesión
    unset($_SESSION['user']);

    // Se destruye la sessión
    session_destroy();

    // Se redirige a la página login
    header("Location: ".$base_url.'/login');
}


$cuadros = cuadros();

require_once 'cuadros.html.php';
