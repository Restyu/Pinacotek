<?php

require_once '../templates/header.html.php';

// Si accedemos a la página welcome: http://localhost:8080/pinacotek/admin/pintor
// sin habernos logueado, nos redirigirá a la página de error
if( isset($_SESSION['user']) == 'admin' ){

    $user = $_SESSION['user'];
    if ($user == 'admin') {

    }else{
      header('Location: '.$base_url);
    }

}else{
header('Location: '.$base_url);
    $user = $_SESSION['user'];
    echo $user;
    exit();
}

 ?>

 
