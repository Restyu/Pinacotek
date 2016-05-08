<?php

require_once '../app/info.php';
require_once $base_path.'db/connectdb.php';

if( isset($_GET['join']) ) {

  $usuario = htmlspecialchars($_POST['usuario'], ENT_QUOTES, 'UTF-8');
  $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
  $pass1 = htmlspecialchars($_POST['pass1'], ENT_QUOTES, 'UTF-8');
  $pass2 = htmlspecialchars($_POST['pass2'], ENT_QUOTES, 'UTF-8');

  echo $usuario;
  echo $email;
  echo $pass1;
  echo $pass2;

  exit();

  ///////////////////////////
  //    FALTA CODIGO      //
  /////////////////////////
}

// REDIRECIONA A LOGIN DESDE EL INDEX.PHP
if( isset($_GET['redirect-login']) ) {

  require_once $base_path.'login/login.html.php';

  exit();
}

if( isset($_GET['login']) ) {

  $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
  $pass = htmlspecialchars($_POST['pass'], ENT_QUOTES, 'UTF-8');

  echo $email;
  echo $pass;

  exit();


    ///////////////////////////
    //    FALTA CODIGO      //
    /////////////////////////

}

  require_once $base_path.'login/join.html.php';
