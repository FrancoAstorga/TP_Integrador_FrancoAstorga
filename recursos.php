<?php
include('basededatos.php');
include('consultas.php');

define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('CLAVE', '');
define('BASE', 'empresacac2023');


$base = new base(SERVIDOR, USUARIO, CLAVE, BASE);
$cons = new consultas($base);
?>