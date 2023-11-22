<?php
include ('cabecera.php');
include ('menu.php');
include ('cuerpo.php');
include ('pie.php');
/*
Si existe la sesion, la destruye! 
*/
@session_start();
session_destroy();
?>
<html>
<head>
<title>Cerraste sesion</title>
</head>
<body>
<strong>Has cerrado sesion!</strong>
</body>
</html>
<?php

echo "<br><a href=index.php>Volver al inicio</a>";





$url ="index.php"; 
$tiempo_espera = 15; 
header("refresh: $tiempo_espera; url=$url");


?>	