<?php

require_once '../app/info.php';
require_once '../db/connectdb.php';
require_once '../db/cuadros.php';

session_start();

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
