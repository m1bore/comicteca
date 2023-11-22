<?php
include ("security.php");
include ('cabecera.php');
include ('menu.php');
include ('cuerpo.php');
include ('pie.php');
if (!Isset ($_POST['modificar'])) {
	include ('conexion.php');




			$SQL = "SELECT * FROM comic c WHERE  id=".$_GET['comic_id'];
			$RS=mysqli_query($con,$SQL);
			$fila=mysqli_fetch_assoc($RS);
			
	
	

		
	?>
<table align=center >
<p align=center>MODIFICAR Comic<br></p>
		<form  method="post" action="modificarcomic.php">
		<tr><td>Título:<input type="text" name="titulo" value="<?php echo $fila['titulo'];?>"></tr></td>
		<tr><td>Autor:<input type="text" name="autor" value="<?php echo $fila['autor'];?>"></tr></td>
		<tr><td>Sinopsis:<input type="text" name="sinopsis" cols="30" rows="10"value="<?php echo $fila['sinopsis'];?>"></textarea></td></tr>
		<tr><td>Estado:<input type="text" name="estado" value="<?php echo $fila['estado'];?>"></tr></td>
		<tr><td>Año:<input type="number" name="anyo" value="<?php echo $fila['anyo'] ?>"></tr></td>
		<tr><td>Capitulos:<input type="number" name="capitulos" value="<?php echo$fila['capitulos'];?>"></tr></td>
	
			    
			
		<input type="hidden" name="comic_id" value="<?php echo $fila['id'];?>" /><br>
		<tr><td><input type="submit" name="modificar" value="modificar" /></tr></td>
		</form>	
	</table>

	<?php
}
else {
$autor=$_REQUEST['autor'];
$titulo=$_REQUEST['titulo'];
$sinopsis=$_REQUEST['sinopsis'];
$anyo=$_REQUEST['anyo'];
$estado=$_REQUEST['estado'];
$capitulos=$_REQUEST['capitulos'];
$comic_id=$_REQUEST['comic_id'];

$con = mysqli_connect("localhost","comicteca","comomola","comicteca") or die("No se pudo abrir la conexión: " . mysqli_connect_error());
$SQL= "UPDATE comic set sinopsis='$sinopsis',autor='$autor',titulo='$titulo',anyo=$anyo,estado='$estado',capitulos='$capitulos' WHERE id=$comic_id";
if(mysqli_query($con,$SQL)){ 
	echo "Se modificaron los datos con exito<br>";
	echo "<a href=listado.php>Regresar al listado</a>";
	$url ="listado.php"; 
	$tiempo_espera = 15; 
	header("refresh: $tiempo_espera; url=$url");
}

mysqli_close($con);
}
?>
