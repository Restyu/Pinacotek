<?php

require_once 'app/info.php';
require_once 'db/connectdb.php';
require_once 'db/pintores.php';

//session_start();

if( isset($_GET['logout']) ){
    // Si hacemos clic en el enlace de Logout de la página welcome (Área privada)
    // Se destruye la variable de sesión
    unset($_SESSION['user']);

    // Se destruye la sessión (ver los enlaces comentados en clase)
    session_destroy();

    // Se redirige a la página del formulario
    header("Location: ".$base_url.'/login');
}

$pintores = pintores();


require_once $base_path.'pintores/pintores.html.php';
