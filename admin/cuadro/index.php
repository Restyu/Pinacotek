<?php

require_once '../../app/info.php';
require_once '../../app/datadb.php';
require_once '../../db/connectdb.php';
require_once '../../db/pintores.php';

$base_path = $_SERVER['DOCUMENT_ROOT'].'/pinacotek/admin/';
$base_imagen_path = $base_path . "imagenes/cuadros/";


if( isset($_GET['nuevocuadro']) ){

    $cuadro = htmlspecialchars($_POST['cuadro'], ENT_QUOTES, 'UTF-8');
    $pintor = htmlspecialchars($_POST['pintor'], ENT_QUOTES, 'UTF-8');
    $dimensiones = htmlspecialchars($_POST['dimensiones'], ENT_QUOTES, 'UTF-8');
    $soporte = htmlspecialchars($_POST['soporte'], ENT_QUOTES, 'UTF-8');
    $tema = htmlspecialchars($_POST['tema'], ENT_QUOTES, 'UTF-8');
    $estilo = htmlspecialchars($_POST['estilo'], ENT_QUOTES, 'UTF-8');
    $year = htmlspecialchars($_POST['year'], ENT_QUOTES, 'UTF-8');
    $siglo = htmlspecialchars($_POST['siglo'], ENT_QUOTES, 'UTF-8');

    $file_name = $_FILES['imagen']['name'];
    $file_size = $_FILES['imagen']['size'];
    $file_tmp = $_FILES['imagen']['tmp_name'];
    $file_type = $_FILES['imagen']['type'];
    $file_error = $_FILES['imagen']['error'];

    // echo $pintor;
    // echo $cuadro;
    // echo $dimensiones;
    // echo $siglo;
    // echo $year;
    // echo $estilo;
    // echo $tema;
    // echo $soporte;

    try {

      $sql = "INSERT INTO cuadros (nombre , id_pintor , dimensiones , soporte , tema , estilo , year , siglo , foto) VALUES ( :nombre , :id_pintor , :dimensiones , :soporte , :tema , :estilo , :year , :siglo , :foto)";

              $foto = $base_url.'/admin/imagenes/cuadros/'.$file_name;
              $ps = $pdo->prepare($sql);
              $ps->bindValue(':nombre', $cuadro);
              $ps->bindValue(':id_pintor', $pintor);
              $ps->bindValue(':dimensiones', $dimensiones);
              $ps->bindValue(':soporte', $soporte);
              $ps->bindValue(':tema', $tema);
              $ps->bindValue(':estilo', $estilo);
              $ps->bindValue(':year', $year);
              $ps->bindValue(':siglo', $siglo);
              $ps->bindValue(':foto', $foto);
              $ps->execute();

    } catch (Exception $e) {

      die ("no se ha podido enviar el cuadro");

    }

    move_uploaded_file($file_tmp, $base_imagen_path . $file_name);
}

$pintores = pintores();

require_once 'cuadro.html.php';
