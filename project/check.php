<?php
include ('conexion.php');
$SQL = "SELECT * FROM usuarios where username ='".$_POST["usuario"]."'";
$RS=mysqli_query($con,$SQL);
$password=md5($_POST["pass"]);
while($fila=mysqli_fetch_assoc($RS)){
//comprobamos si los datos son correctos
if ($_POST["usuario"]==$fila['username'] && $password==$fila['password']){
//Si son validos... creo una sesion
//creando sesion y guardando datos
session_start();
$_SESSION["autentificado"]= "SI";
$usuario=$_REQUEST['usuario'];
$_SESSION["usuario"]= $usuario;
if ($fila['admin'] == "si") {
	$_SESSION["administrador"]= "SI";
}
header ("Location: index.php");
}else {
//si no existe le mando otra vez a la portada
header("Location: inicio.php?error=data");
}
}
?>
