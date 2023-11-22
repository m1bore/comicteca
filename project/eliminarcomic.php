<?php
include ("security.php");
include ('cabecera.php');
include ('menu.php');
include ('cuerpo.php');
include ('pie.php');

if (!Isset ($_POST['conf'])) {
include ("conexion.php");




			$SQL = "SELECT * FROM  comic WHERE id=".$_GET['comic_id'];
			$RS=mysqli_query($con,$SQL);
			$fila=mysqli_fetch_assoc($RS);
			?>
			<html>
<body>
		<h2>ELIMINAR COMIC</h2>
		<form  method="post" action="eliminarcomic.php">
		
		<p>¿Estas seguro que deseas eliminar "<?php echo $fila['titulo'];?>" ? &nbsp;&nbsp;</p>
			    
			
		<input type="hidden" name="id" value="<?php echo $fila['id'];?>" />
		<input type="submit" name="conf" value="Confirmar" />
		</form>	

</body>
</html>
<?php
}else{
	$con = mysqli_connect("localhost","root","comomola","comicteca");
$SQL ="DELETE FROM comic WHERE id=".$_POST['id'];
if(mysqli_query($con,$SQL)){ 
	echo "Registro eliminado con exito<br>";
	echo "<a href=listado.php>Regresar al listado</a>";
	}
mysqli_close($con);
$url ="listado.php"; 
	$tiempo_espera = 15; 
	header("refresh: $tiempo_espera; url=$url");
}
?>

