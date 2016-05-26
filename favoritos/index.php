<?php

require_once '../app/info.php';
require_once '../db/connectdb.php';
require_once '../db/favoritos.php';

session_start();

$id_usuario = $_SESSION['id'];

$favoritos = favoritos($id_usuario);

require_once 'favoritos.html.php';
