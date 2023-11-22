<?php
include ("security.php");
include ('cabecera.php');
include ('menu.php');
include ('cuerpo.php');
include ('pie.php');
if (!Isset ($_POST['Enviar'])) {
?>  
<html>
<body>
<table align=center >
<form method="Post" action="insertarcomic.php" ENCTYPE="multipart/form-data">

<p align=center>Insertar Comic<br></p>
<tr><td>Título:<input type="text" name="titulo"></td></tr>
<tr><td>Autor:<input type="text" name="autor"><br></td></tr>
<tr><td>Sinopsis:<textarea name="sinopsis" id="1" cols="30" rows="10"></textarea></td></tr>
<tr><td> Generos:<input type="text" name="texto" required></tr></td>
<tr><td>Año:<input type="number" name="anyo"><br></td></tr>
<tr><td>Portada:<input TYPE="FILE" NAME="portada"><br></td></tr>
<tr><td>Estado:<input type="text" name="estado"><br></td></tr>
<tr><td>Capitulos:<input type="number" name="capitulos"><br></td></tr>
<tr><td><input type="submit" name="Enviar" value="Enviar"></td></tr>





</form>
</table>
</body>
</html>


<?php
}
else {
 if (is_uploaded_file ($_FILES['portada']['tmp_name']))
{
	$comic_id=rand(10000000,99999999);
	$nombreDirectorio = "img/";
	$nombreFichero = $_FILES['portada']['name'];
	
	$nombreCompleto = $nombreDirectorio . $nombreFichero;

	move_uploaded_file ($_FILES['portada']['tmp_name'],
	$nombreDirectorio . $nombreFichero);
	
	$titulo=$_REQUEST['titulo'];
	$autor=$_REQUEST['autor'];
	$sinopsis=$_REQUEST['sinopsis'];
	$anyo=$_REQUEST['anyo'];
	$capitulos=$_REQUEST['capitulos'];
	$estado=$_REQUEST['estado'];
	



	$con = mysqli_connect("localhost","root","comomola","comicteca") or die("No se pudo abrir la conexión: " . mysqli_connect_error());



	$SQL= "INSERT INTO comic VALUES( $comic_id, '$titulo',  '$autor','$estado','$sinopsis',  $anyo , '$nombreCompleto', '$capitulos' )";
	
	if(mysqli_query($con,$SQL)){ 
	echo "Se insertaron los datos con exito<br>";
	}
	
 	$Tags = $_POST["texto"];
if (!empty($Tags)) {
	$Etiqueta = explode(",",$Tags);
	foreach ($Etiqueta as $Tag) {
		$c_id=rand(10000000,99999999);
		$sql= sprintf("INSERT INTO generocomic (idg,idcomic,idgenero) VALUES ($c_id,$comic_id,'$Tag')");
		if(mysqli_query($con,$sql)){ 
	echo "Se insertaron los datos con exito<br>";
	}
	}
	}
	
	echo "<a href=listado.php>Regresar al listado</a>";

	mysqli_close($con);
	$url ="listado.php"; 
	$tiempo_espera = 15; 
	header("refresh: $tiempo_espera; url=$url");


}
else
	print ("No se ha podido subir el fichero\n");   





}
?>