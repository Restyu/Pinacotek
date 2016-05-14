<?php

require_once 'app/info.php';
require_once 'db/connectdb.php';
require_once 'db/pintores.php';

$pintores = pintores();


require_once $base_path.'pintores/pintores.html.php';
