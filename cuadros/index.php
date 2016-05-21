<?php

require_once '../app/info.php';
require_once '../db/connectdb.php';
require_once '../db/cuadros.php';











$cuadros = cuadros();

require_once 'cuadros.html.php';
